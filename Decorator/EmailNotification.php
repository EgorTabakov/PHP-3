<?php


namespace Decorator\Decorator;

use Decorator\Contract\NotificationInterface;

class EmailNotification extends NotificationDecorator
{
    /**
     * @param $data
     */
    public function send($data):void
    {
        echo "Send notification to email: " . $data . "</br>";
        $this->notifier->send($data);
    }
}
