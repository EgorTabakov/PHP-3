<?php


namespace Adapter\Service;


use Adapter\Contract\ISquare;

class ServiceISquare  implements ISquare
{

    /**
     * @param int $sideSquare
     * @return int|int
     */

    public function squareArea($sideSquare)
    {
        return $sideSquare ** 2;
    }
}