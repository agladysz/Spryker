<?php

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

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
        $originalString = "Hello Spryker!";
        $reversedString = $this->getFacade()->reverseString($originalString);

        return ['string' => $reversedString];
    }
}
