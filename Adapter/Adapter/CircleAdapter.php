<?php


namespace Adapter\Adapter;


use Adapter\Contract\ICircle;
use Adapter\Library\CircleAreaLib;


class CircleAdapter implements ICircle
{
    private $CircleAreaLib;


    /**
     * CircleAdapter constructor.
     * @param CircleAreaLib $CircleAreaLib
     */
    public function __construct(CircleAreaLib $CircleAreaLib)
    {
        $this->CircleAreaLib = $CircleAreaLib;
    }

    /**
     * @param $circumference
     * @return float|int|string
     */
    public function circleArea($circumference)
    {
        return $this->CircleAreaLib->getCircleArea($circumference);
    }

}