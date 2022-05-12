<?php
declare(strict_types=1);

namespace Src\Applications\User\UseCases;

use Src\Applications\User\Responses\GetUserResponseModel;
use Src\Core\Exceptions\UserNotFoundException;
use Src\Domains\User\ViewModels\ViewModel;

interface GetUserOutputPort
{
    public function userFound(GetUserResponseModel $model): ViewModel;

    public function userNotFound(UserNotFoundException $e): ViewModel;
}
