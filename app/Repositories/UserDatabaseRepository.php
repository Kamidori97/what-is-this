<?php

namespace App\Repositories;

use App\Models\User as ModelsUser;
use Src\Domains\User\Entities\User;
use Src\Domains\User\Repositories\UserRepositoryInterface;

class UserDatabaseRepository implements UserRepositoryInterface
{
    public function get(int $id): ?User
    {
        return ModelsUser::find($id);
    }
}
