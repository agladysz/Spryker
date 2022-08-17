<?php

namespace Pyz\Zed\Planet\Business\Planet;
use Generated\Shared\Transfer\PlanetTransfer;

interface PlanetSaverInterface
{
    /**
     * @param \Generated\Shared\Transfer\PlanetTransfer $planetTransfer
     *
     * @return \Generated\Shared\Transfer\PlanetTransfer
     */
    public function save(PlanetTransfer $planetTransfer): PlanetTransfer;
}

