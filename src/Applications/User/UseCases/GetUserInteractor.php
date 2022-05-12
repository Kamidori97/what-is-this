<?php
declare(strict_types=1);

namespace Src\Applications\User\UseCases;

use Exception;
use Src\Applications\User\Requests\GetUserRequestModel;
use Src\Applications\User\Responses\GetUserResponseModel;
use Src\Core\Exceptions\UserNotFoundException;
use Src\Domains\User\Repositories\UserRepositoryInterface;
use Src\Domains\User\ViewModels\ViewModel;

class GetUserInteractor implements GetUserInputPort
{
    private $output;
    private $repository;

    public function __construct(
        GetUserOutputPort $output,
        UserRepositoryInterface $repository
    ) {
        $this->output = $output;
        $this->repository = $repository;
    }

    public function getUser(GetUserRequestModel $model): ViewModel
    {
        $user = $this->repository->get($model->getIdentifier());

        if ($user) {
            $responseModel = new GetUserResponseModel($user);
            return $this->output->userFound($responseModel);
        }
        return $this->output->userNotFound(new UserNotFoundException('User not found'));
    }
}
