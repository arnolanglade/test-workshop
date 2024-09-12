<?php

declare(strict_types=1);

namespace App\Tests\Integration;

use App\Domain\Account\Account;
use App\Domain\Account\Accounts;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;

final class AccountsContext implements Context
{
    private Accounts $accounts;
    private bool $errorRaised = false;

    public function __construct(Accounts $accounts)
    {
        $this->accounts = $accounts;
    }

    /**
     * @When I add an account to the repository
     */
    public function iAddAnAccountToTheRepository()
    {
        $this->accounts->add(new Account('pepito', 'password'));
    }

    /**
     * @Then the repository owns a new account
     */
    public function theRepositoryOwnsANewAccount()
    {
        $actualAccount = $this->accounts->get('pepito');

        if (!$actualAccount->hasSameState(new Account('pepito', 'password'))) {
            throw new \Exception('We can retrieve the account');
        }
    }

    /**
     * @When I get an account with an unknown username
     */
    public function iGetAnAccountWithAnUnknownUsername()
    {
        try {
            $this->accounts->get('wrong-username');
        } catch (\Exception $e) {
            $this->errorRaised = true;
        }
    }

    /**
     * @Then an error is raised
     */
    public function anErrorIsRaised()
    {
        if (!$this->errorRaised) {
            throw new \Exception('An error should have been raised but it did not.');
        }
    }
}
