<?php

namespace Pyz\Zed\ApplicationAT\Communication\Controller;

use Symfony\Component\HttpFoundation\Response;
use Spryker\Zed\Application\Communication\Controller\IndexController as SprykerIndexController;

class IndexController extends SprykerIndexController
{
    /**
     * @return Response('')
     */
    public function indexAction(): Response
    {
        return new Response('Hello AT Store!');
    }
}
