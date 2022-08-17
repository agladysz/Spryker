<?php
namespace Pyz\Zed\Planet\Persistence;

use Generated\Shared\Transfer\PlanetTransfer;

interface PlanetRepositoryInterface
{
    /**
     * @param int $idPlanet
     *
     * @return \Generated\Shared\Transfer\PlanetTransfer|null
     */
    public function findPlanetById(int $idPlanet): ?PlanetTransfer;
}
