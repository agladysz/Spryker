<?php
namespace Pyz\Zed\Planet\Business\Planet;

use Generated\Shared\Transfer\PlanetTransfer;

interface PlanetReaderInterface
{
    /**
     * @param int $idPlanet
     *
     * @return \Generated\Shared\Transfer\PlanetTransfer|null
     */
    public function findPlanetById(int $idPlanet): ?PlanetTransfer;
}

