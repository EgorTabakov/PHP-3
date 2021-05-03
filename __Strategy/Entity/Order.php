<?php


namespace Strategy\Entity;


use Strategy\Contract\OrderInterface;

class Order implements OrderInterface
{

    private $sum;
    private $phone;

    /**
     * Order constructor.
     * @param float $sum
     * @param int $phone
     */
    public function __construct(float $sum, int $phone)
    {
        $this->sum = $sum;
        $this->phone = $phone;

    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return $this->sum;
    }

    /**
     * @return int
     */
    public function getPhone(): int
    {
        return $this->phone;
    }


}