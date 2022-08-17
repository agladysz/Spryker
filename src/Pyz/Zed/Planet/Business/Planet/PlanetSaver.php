<?php
namespace Pyz\Zed\Planet\Business\Planet;

use Generated\Shared\Transfer\PlanetTransfer;
use Pyz\Zed\Planet\Persistence\PlanetEntityManagerInterface;

class PlanetSaver implements PlanetSaverInterface
{
    /** @var \Pyz\Zed\Planet\Persistence\PlanetEntityManagerInterface */
    private PlanetEntityManagerInterface $planetEntityManager;

    /**
     * @param \Pyz\Zed\Planet\Persistence\PlanetEntityManagerInterface $planetEntityManager
     */
    public function __construct(PlanetEntityManagerInterface $planetEntityManager)
    {
        $this->planetEntityManager = $planetEntityManager;
    }

    /**
     * @param \Generated\Shared\Transfer\PlanetTransfer $planetTransfer
     *
     * @return \Generated\Shared\Transfer\PlanetTransfer
     */
    public function save(PlanetTransfer $planetTransfer): PlanetTransfer
    {
        return $this->planetEntityManager->savePlanet($planetTransfer);
    }
}
