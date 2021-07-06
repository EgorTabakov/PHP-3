<?php


namespace Adapter\Service;


use Adapter\Contract\ICircle;

class ServiceICircle implements ICircle
{

    /**
     * @param int $circumference
     * @return float|int
     */
    public function circleArea($circumference)
    {
        return "Service " . ($circumference ** 2) / (4 * M_PI);
    }
}

