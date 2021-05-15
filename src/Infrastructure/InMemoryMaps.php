<?php

namespace App\Infrastructure;

use App\Domain\Maps;
use App\Domain\Map;

class InMemoryMaps implements Maps
{
    public function get(string $id): Map
    {
        return new Map();
    }

    public function add(Map $map)
    {
    }
}
