<?php

declare(strict_types=1);

namespace App\Tests\Acceptance;

use App\Domain\Map;
use App\Domain\Maps;
use App\Domain\Marker;
use App\Domain\UseCase\AddMarkerOnMap;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Symfony\Component\Messenger\MessageBusInterface;

final class CartographyContext implements Context
{
    private Maps $maps;
    private MessageBusInterface $messageBus;

    public function __construct(Maps $maps, MessageBusInterface $messageBus)
    {
        $this->maps = $maps;
        $this->messageBus = $messageBus;
    }

    /**
     * @Given a map :mapName without any markers
     */
    public function pepitoHasCreatedAMap($mapName)
    {
        $map = new Map('7ac5ed2c-35cd-4498-80c6-eb1c72c4497b', $mapName);
        $this->maps->add($map);
    }

    /**
     * @When a cartographer adds a marker :markerName on :mapName
     */
    public function pepitoAddsAMarkerOnTheMap($markerName, $mapName)
    {
        $this->messageBus->dispatch(new AddMarkerOnMap(
            '7ac5ed2c-35cd-4498-80c6-eb1c72c4497b',
            $markerName,
            34.42523532,
            54.45234523,
        ));
    }

    /**
     * @Then the marker :markerName is added on :mapName
     */
    public function theCategoriesIsCreated($markerName, $mapName)
    {
        $map = $this->maps->get('7ac5ed2c-35cd-4498-80c6-eb1c72c4497b');

        if (!$map->hasSameState(
            new Map(
                '7ac5ed2c-35cd-4498-80c6-eb1c72c4497b',
                $mapName,
                new Marker(
                    $markerName,
                    34.42523532,
                    54.45234523,
                )
            )
        )
        ) {
            throw new \Exception('The marker is not added on the map');
        }
    }
}
