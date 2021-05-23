<?php

declare(strict_types=1);

namespace App\Tests\Acceptance;

use App\Domain\Account\Accounts;
use App\Domain\Account\UseCase\RegisterForTheApplication;
use Behat\Behat\Context\Context;
use Symfony\Component\Messenger\MessageBusInterface;

final class AccountContext implements Context
{
    private MessageBusInterface $messageBus;
    private Accounts $accounts;

    public function __construct(MessageBusInterface $messageBus, Accounts $accounts)
    {
        $this->messageBus = $messageBus;
        $this->accounts = $accounts;
    }

    /**
     * @When Pepito registers for the application
     */
    public function pepitoRegistersForTheApplication()
    {
        $this->messageBus->dispatch(new RegisterForTheApplication('pepito', 'password'));
    }

    /**
     * @Then Pepito has an account on the application
     */
    public function pepitoHasAnAccountOnTheApplication()
    {
        $this->accounts->get('pepito');
    }
}
