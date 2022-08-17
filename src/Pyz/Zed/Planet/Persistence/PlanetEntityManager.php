<?php
namespace Pyz\Zed\Planet\Persistence;

use Generated\Shared\Transfer\PlanetTransfer;
use Orm\Zed\Planet\Persistence\PyzPlanetQuery;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

class PlanetEntityManager extends AbstractEntityManager implements PlanetEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\PlanetTransfer $planetTransfer
     *
     * @return \Generated\Shared\Transfer\PlanetTransfer
     * @throws \Propel\Runtime\Exception\PropelException
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function savePlanet(PlanetTransfer $planetTransfer): PlanetTransfer
    {
        $planetEntity = $this->createPyzPlanetQuery()
            ->filterByIdPlanet($planetTransfer->getIdPlanet())
            ->findOneOrCreate();

        // fill up entity
        $planetEntity->fromArray($planetTransfer->toArray());
        $planetEntity->save();

        // update transfer based on entity (like id_planet field)
        $planetTransfer->fromArray($planetEntity->toArray());

        return $planetTransfer;
    }

    /**
     * @return \Orm\Zed\Planet\Persistence\PyzPlanetQuery
     */
    private function createPyzPlanetQuery(): PyzPlanetQuery
    {
        return PyzPlanetQuery::create();
    }
}
