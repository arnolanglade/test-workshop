<?php

namespace App\Infrastructure\Account;

use App\Domain\Account\Account;
use App\Domain\Account\Accounts;

class InMemoryAccounts implements Accounts
{
    /** @var array<Account> */
    private array $accounts = [];

    public function get(string $username): Account
    {
        $account = \current(
            array_filter(
                $this->accounts,
                fn (Account $account) => $account->hasUsername($username)
            )
        );

        if (!$account) {
            throw new \Exception("The account $username does not exist");
        }

        return $account;
    }

    public function add(Account $account): void
    {
        $this->accounts[] = $account;
    }
}