<?php

namespace App\Infrastructure\Account;

use App\Domain\Account\Account;
use App\Domain\Account\Accounts;

class InMemoryAccounts implements Accounts
{
    public function get(string $username)
    {
        throw new \Exception("The account $username does not exist");
    }

    public function add(Account $account): void
    {
    }
}