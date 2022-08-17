<?php
namespace Pyz\Zed\Planet\Persistence;

use Generated\Shared\Transfer\PlanetTransfer;

interface PlanetEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\PlanetTransfer $planetTransfer
     *
     * @return \Generated\Shared\Transfer\PlanetTransfer
     */
    public function savePlanet(PlanetTransfer $planetTransfer): PlanetTransfer;
}
