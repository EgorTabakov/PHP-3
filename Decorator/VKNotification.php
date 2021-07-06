<?php


namespace Decorator\Decorator;


use Decorator\Contract\NotificationInterface;

class VKNotification extends NotificationDecorator
{
    /**
     * @param $data
     */
    public function send($data):void
    {
        echo "Send notification to VK: " . $data  . "</br>";
        $this->notifier->send($data);
    }
}