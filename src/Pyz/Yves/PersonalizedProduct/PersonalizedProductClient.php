<?php

namespace Pyz\Client\PersonalizedProduct;

use Spryker\Client\Kernel\AbstractClient;

class PersonalizedProductClient extends AbstractClient implements PersonalizedProductClientInterface
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public function getPersonalizedProducts($limit)
    {
    }
}
