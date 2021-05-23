<?php

namespace App\Domain\Account\UseCase;

class RegisterForTheApplication
{
    /** read only */
    public string $username;
    /** read only */
    public string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
}