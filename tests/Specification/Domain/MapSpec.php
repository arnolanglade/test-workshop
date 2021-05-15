<?php

namespace Specification\App\Domain;

use App\Domain\Map;
use PhpSpec\ObjectBehavior;

class MapSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Map::class);
    }

    function it checks if another map has the same state()
    {
        $this->hasSameState(new Map())->shouldReturn(true);
    }
}
