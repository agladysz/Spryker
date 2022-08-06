<?php

namespace Pyz\Zed\HelloSpryker\Business\Reverser;

class StringReverser implements StringReverserInterface
{
    /**
     * @param string $stringToReverse
     *
     * @return string
     */
    public function reverseString(string $stringToReverse): string
    {
        return strrev($stringToReverse);
    }
}
