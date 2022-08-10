<?php

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Generated\Shared\Transfer\HelloSprykerTransfer;
/**
* @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerFacadeInterface getFacade()
*/

class IndexController extends AbstractController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array
     */
    public function indexAction(Request $request)
    {
        $helloSprykerTransfer = new HelloSprykerTransfer();
        $helloSprykerTransfer->setOriginalString("Hello Spryker!");

        $helloSprykerTransfer = $this->getFacade()->createHelloSprykerEntity($helloSprykerTransfer);
        $helloSprykerTransfer = $this->getFacade()->findHelloSpryker($helloSprykerTransfer);

        $helloSprykerTransfer = $this -> getFacade()->reverseString($helloSprykerTransfer);

        return ['string' => $helloSprykerTransfer->getReversedString()];
    }
}
