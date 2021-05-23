<?php

namespace App\Infrastructure\Account;

use App\Domain\Account\Account;
use App\Domain\Account\Accounts;

class InMemoryAccounts implements Accounts
{
    /** @var array<Account> */
    private array $accounts;

    public function get(string $username): Account
    {
        return \current(
            array_filter(
                $this->accounts,
                fn (Account $account) => $account->hasUsername($username)
            )
        );
    }

    public function add(Account $account): void
    {
        $this->accounts[] = $account;
    }
}