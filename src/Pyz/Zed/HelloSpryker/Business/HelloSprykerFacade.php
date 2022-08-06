<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerBusinessFactory getFactory()
 */
class HelloSprykerFacade extends AbstractFacade implements HelloSprykerFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param string $stringToReverse
     *
     * @return string
     */
    public function reverseString(string $stringToReverse): string
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverseString($stringToReverse);
    }
}
