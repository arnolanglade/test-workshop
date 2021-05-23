<?php

namespace App\Domain\Account\UseCase;

use App\Domain\Account\Account;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class RegisterForTheApplicationHandler implements MessageHandlerInterface
{
    public function __invoke(RegisterForTheApplication $command)
    {
        $account = new Account($command->username, $command->password);
    }
}