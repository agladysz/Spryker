<?php
namespace Pyz\Zed\Planet\Communication\Controller;

use Generated\Shared\Transfer\PlanetTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use function PHPUnit\Framework\isNull;

/**
 * @method \Pyz\Zed\Planet\Communication\PlanetCommunicationFactory getFactory()
 */

class EditController extends AbstractController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */

    public function indexAction(Request $request)
    {
        $idPlanet = $this->castId($request->query->get('id-planet'));
        $planet = $this->getFacade()
                ->findPlanetById($idPlanet);
        if(is_null($planet)){
            $this->addErrorMessage('Planet with given id not exists.');
            return $this->redirectResponse('/planet/list');
        }
        $planetTransfer = (new PlanetTransfer())
            ->setIdPlanet($idPlanet)
            ->setName($planet->getName())
            ->setInterestingFact($planet->getInterestingFact());

        $planetForm = $this->getFactory()
            ->createPlanetForm($planetTransfer)
            ->handleRequest($request);

        if ($planetForm->isSubmitted() && $planetForm->isValid()) {
            $this->getFacade()
                ->savePlanet($planetForm->getData());
            $this->addSuccessMessage('Planet was updated.');

            return $this->redirectResponse('/planet/list');
        }

        return $this->viewResponse([
            'planetForm' => $planetForm->createView()
        ]);
    }

}
