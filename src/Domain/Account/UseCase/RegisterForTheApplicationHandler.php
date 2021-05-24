<?php

namespace App\Domain\Account\UseCase;

use App\Domain\Account\Account;
use App\Domain\Account\Accounts;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class RegisterForTheApplicationHandler implements MessageHandlerInterface
{
    private Accounts $accounts;

    public function __construct(Accounts $accounts)
    {
        $this->accounts = $accounts;
    }

    public function __invoke(RegisterForTheApplication $command)
    {
        $account = new Account($command->username, $command->password);

        $this->accounts->add($account);
    }
}