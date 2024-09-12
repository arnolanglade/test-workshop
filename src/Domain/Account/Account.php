<?php

namespace App\Domain\Account;

class Account
{
    private string $username;
    private string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function hasUsername(string $username)
    {
        return $this->username === $username;
    }

    public function hasSameState(Account $account)
    {
        return $account == $this;
    }
}
