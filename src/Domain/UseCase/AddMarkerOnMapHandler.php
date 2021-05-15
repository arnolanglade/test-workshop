<?php

namespace App\Domain\UseCase;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class AddMarkerOnMapHandler implements MessageHandlerInterface
{
    public function __invoke(AddMarkerOnMap $command)
    {
    }
}
