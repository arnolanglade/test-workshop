<?php

namespace App\Domain\Account;

interface Accounts
{
    public function get(string $username): Account;
    public function add(Account $account): void;
}