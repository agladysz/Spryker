<?php

namespace Pyz\Zed\Planet\Communication;
use Symfony\Component\Form\FormInterface;
use Generated\Shared\Transfer\PlanetTransfer;
use Pyz\Zed\Planet\Communication\Form\PlanetForm;
use Orm\Zed\Planet\Persistence\PyzPlanetQuery;
use Pyz\Zed\Planet\PlanetDependencyProvider;
use Pyz\Zed\Planet\Communication\Table\PlanetTable;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException;

class PlanetCommunicationFactory extends AbstractCommunicationFactory {
    /**  * @return \Pyz\Zed\Planet\Communication\Table\PlanetTable
     * @throws \Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException  */

    public function createPlanetTable(): PlanetTable {
        return new PlanetTable($this->getPlanetPropelQuery());
    }
    /**  * @return \Orm\Zed\Planet\Persistence\PyzPlanetQuery
    * @throws \Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException */

    private function getPlanetPropelQuery(): PyzPlanetQuery {
        return $this->getProvidedDependency(PlanetDependencyProvider::QUERY_PLANET);
    }

    // trait BundleDependencyProviderResolverAwareTrait
    public function getProvidedDependency($key)
    {
        $container = $this->getContainer();
        if($container->has($key) === false){
            throw new ContainerKeyNotFoundException($this,$key);
        }
        return $container->get($key);
    }

    /**
     * @param \Generated\Shared\Transfer\PlanetTransfer|null $planetTranfser
     * @param array $options
     *
     * @return \Symfony\Component\Form\FormInterface
     */

    public function createPlanetForm(?PlanetTransfer $planetTransfer = null,
                                    array $options = []): FormInterface {
        return $this->getFormFactory()->create(
            PlanetForm::class,
            $planetTransfer,
            $options
        );

    }

}
