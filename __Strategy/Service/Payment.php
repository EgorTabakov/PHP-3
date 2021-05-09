<?php


namespace Strategy\Service;


use Strategy\Contract\PaymentInterface;


class Payment
{
    /**
     * @param PaymentInterface $ipayment
     * @param $order
     * @return mixed
     */
    public function payment(PaymentInterface $ipayment, $order)

    {
        return $ipayment->payment($order);
    }
}