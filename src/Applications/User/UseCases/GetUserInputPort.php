<?php
declare(strict_types=1);

namespace Src\Applications\User\UseCases;

use Src\Applications\User\Requests\GetUserRequestModel;
use Src\Domains\User\ViewModels\ViewModel;

interface GetUserInputPort
{
    public function getUser(GetUserRequestModel $model): ViewModel;
}
