<?php

namespace Specification\App\Domain;

use App\Domain\Marker;
use PhpSpec\ObjectBehavior;

class MarkerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Marker::class);
    }
}
