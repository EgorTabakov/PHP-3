<?php


namespace Adapter\Library;


class CircleAreaLib
{
    /**
     * @param int $diagonal
     * @return float|int
     */
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * $diagonal**2)/4;

       return "From Library CircleAreaLib: " . $area;
   }
}