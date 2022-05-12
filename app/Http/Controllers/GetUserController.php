<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Adapters\ViewModels\JsonResourceViewModel;
use Src\Applications\User\Requests\GetUserRequestModel;
use Src\Applications\User\UseCases\GetUserInputPort;

class GetUserController extends Controller
{
    private GetUserInputPort $interactor;

    public function __construct(GetUserInputPort $interactor)
    {
        $this->interactor = $interactor;
    }

    public function __invoke($id)
    {
        $requestModel = new GetUserRequestModel((int) $id);
        $viewModel = $this->interactor->getUser($requestModel);
        if ($viewModel instanceof JsonResourceViewModel) {
            return $viewModel->getResource();
        }
        return null;
    }
}
