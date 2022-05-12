<?php
declare(strict_types=1);

namespace Src\Domains\User\Repositories;

use Src\Domains\User\Entities\User;

interface UserRepositoryInterface
{
    public function get(int $id): ?User;
}
