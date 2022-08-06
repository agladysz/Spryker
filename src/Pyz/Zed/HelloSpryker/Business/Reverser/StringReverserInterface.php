<?php

namespace Pyz\Zed\HelloSpryker\Business\Reverser;

interface StringReverserInterface
{
    /**
     * @param string $stringToReverse
     *
     * @return string
     */
    public function reverseString(string $stringToReverse): string;
}
