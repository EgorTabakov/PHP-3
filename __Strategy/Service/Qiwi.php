<?php


namespace Strategy\Service;


use Strategy\Contract\PaymentInterface;
use Strategy\Entity\Order;

class Qiwi implements PaymentInterface
{

    /**
     * @param Order $order
     */
    public function payment($order):void
    {
        echo "Оплата на QIWI кошелек,  на сумму:  " . $order->getSum() . "руб" .
            "  по номеру телефона:" . $order->getPhone() . "</br>";
    }
}