<?php

namespace Pyz\Zed\Planet\Communication\Controller;

use Generated\Shared\Transfer\PlanetCollectionTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

class GatewayController extends AbstractGatewayController {

    public function getPlanetCollectionAction(PlanetCollectionTransfer $planetsRestApiTransfer) : PlanetCollectionTransfer
    {
        return $this->getFacade()->getPlanetCollection($planetsRestApiTransfer);
    }
}
