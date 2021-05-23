<?php

namespace App\Domain\Account\UseCase;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class RegisterForTheApplicationHandler implements MessageHandlerInterface
{
    public function __invoke(RegisterForTheApplication $command)
    {
    }
}