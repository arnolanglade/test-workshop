<?php

namespace App\Domain\Account;

interface Accounts
{
    public function get(string $username);
}