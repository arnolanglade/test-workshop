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
}
