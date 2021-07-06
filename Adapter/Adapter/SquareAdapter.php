<?php


namespace Adapter\Adapter;


use Adapter\Contract\ISquare;
use Adapter\Library\SquareAreaLib;

class SquareAdapter implements ISquare
{
    private $squareAreaLib;


    /**
     * SquareAdapter constructor.
     * @param SquareAreaLib $squareAreaLib
     */
    public function __construct(SquareAreaLib $squareAreaLib)
    {
        $this->squareAreaLib = $squareAreaLib;
    }

    /**
     * @param $diagonal
     * @return float|int
     */
    public function squareArea($diagonal)
    {
        return $this->squareAreaLib->getSquareArea($diagonal);
    }

}