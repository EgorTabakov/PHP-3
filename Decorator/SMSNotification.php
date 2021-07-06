<?php


namespace Decorator\Decorator;


use Decorator\Contract\NotificationInterface;

class SMSNotification extends NotificationDecorator
{
    /**
     * @param $data
     */
    public function send($data):void
    {
        echo "Send notification to SMS: " . $data  . "</br>";
        $this->notifier->send($data);
    }
}
