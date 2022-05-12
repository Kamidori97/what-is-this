<?php
declare(strict_types=1);

namespace Src\Domains\User\Entities;

interface User
{
    public function getId(): int;

    public function getName(): string;

    public function setName(string $name): void;

    public function getEmail(): string;

    public function setEmail(string $email): void;
}
