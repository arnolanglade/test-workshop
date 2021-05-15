<?php

namespace App\Domain;

interface Maps
{
    public function get(string $id): Map;
    public function add(Map $map);
}
