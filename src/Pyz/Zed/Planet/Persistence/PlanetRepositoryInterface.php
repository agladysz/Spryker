<?php
namespace Pyz\Zed\Planet\Persistence;

use Generated\Shared\Transfer\PlanetCollectionTransfer;
use Generated\Shared\Transfer\PlanetTransfer;

interface PlanetRepositoryInterface
{
    /**
     * @param int $idPlanet
     *
     * @return \Generated\Shared\Transfer\PlanetTransfer|null
     */
    public function findPlanetById(int $idPlanet): ?PlanetTransfer;

    public function getPlanetCollection(PlanetCollectionTransfer $planetsRestApiTransfer) : PlanetCollectionTransfer;

}
