<?php


namespace Strategy\Contract;


use Strategy\Entity\Order;

interface PaymentInterface
{
    public function payment(Order $order);
}