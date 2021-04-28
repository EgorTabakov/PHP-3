<?php


namespace Adapter\Library;


class SquareAreaLib
{
    /**
     * @param int $diagonal
     * @return float|int
     */
    public function getSquareArea(int $diagonal)
    {
        $area = ($diagonal**2)/2;

        return "From Library SquareAreaLib: " . $area;
    }
}