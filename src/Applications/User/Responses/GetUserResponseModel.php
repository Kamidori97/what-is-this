<?php
declare(strict_types=1);

namespace Src\Applications\User\Responses;

use Src\Domains\User\Entities\User;

class GetUserResponseModel
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getUserId(): int
    {
        return $this->user->getId();
    }

    public function getUserName(): string
    {
        return $this->user->getName();
    }

    public function getEmailAddress(): string
    {
        return $this->user->getEmail();
    }
}
