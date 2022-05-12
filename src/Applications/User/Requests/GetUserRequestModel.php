<?php
declare(strict_types=1);

namespace Src\Applications\User\Requests;

class GetUserRequestModel
{
    /**
     * @var int
     */
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getIdentifier(): int
    {
        return $this->id;
    }
}
