<?php

namespace Pyz\Zed\Planet\Communication\Controller;
use Nette\Utils\Json;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

/** @method \Pyz\Zed\Planet\Communication\PlanetCommunicationFactory getFactory() */

class ListController extends AbstractController{
    /** @return array
     *  @throws \Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException
     */

    public function indexAction(): array
    {
        $planetTable = $this->getFactory()->createPlanetTable();
        return $this->viewResponse([
            'planetTable' => $planetTable->render()
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @throws \Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException
     */

    public function tableAction(): JsonResponse
    {
        $planetTable = $this->getFactory()->createPlanetTable();

        return $this->jsonResponse($planetTable->fetchData());
    }
}
