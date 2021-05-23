<?php

namespace App\Domain\Account;

interface Accounts
{
    public function get(string $username);
    public function add(Account $account): void;
}