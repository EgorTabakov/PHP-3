<?php


namespace Decorator\Service;


use Decorator\Contract\NotificationInterface;

class BaseNotification implements NotificationInterface
{
    /**
     * @param $data
     */
    public function send($data):void
    {
        echo "Send notification: " . $data . "</br>";

    }

}