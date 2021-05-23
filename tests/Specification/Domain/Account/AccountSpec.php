<?php

namespace Specification\App\Domain\Account;

use App\Domain\Account\Account;
use PhpSpec\ObjectBehavior;

class AccountSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('pepito', 'password');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Account::class);
    }

    function it checks if the account has the given username()
    {
        $this->hasUsername('pepito')->shouldReturn(true);
        $this->hasUsername('arn0')->shouldReturn(false);
    }

    function it checks if another account has the same state()
    {
        $this->hasSameState(new Account('pepito', 'password'))->shouldReturn(true);
        $this->hasSameState(new Account('pepita', 'password'))->shouldReturn(false);
    }
}
