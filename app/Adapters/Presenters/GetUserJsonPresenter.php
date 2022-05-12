<?php

namespace App\Adapters\Presenters;

use App\Adapters\ViewModels\JsonResourceViewModel;
use App\Http\Resources\UserFoundResource;
use App\Http\Resources\UserNotFoundResource;
use Src\Applications\User\UseCases\GetUserOutputPort;
use Src\Applications\User\Responses\GetUserResponseModel;
use Src\Domains\User\ViewModels\ViewModel;

class GetUserJsonPresenter implements GetUserOutputPort
{
    public function userFound(GetUserResponseModel $model): ViewModel
    {
        return new JsonResourceViewModel(
            new UserFoundResource($model->getUser())
        );
    }

    public function userNotFound(\Throwable $e): ViewModel
    {
        // if (config('app.debug')) {
        //     // rethrow and let Laravel display the error
        //     throw $e;
        // }

        return new JsonResourceViewModel(
            new UserNotFoundResource($e)
        );
    }
}
