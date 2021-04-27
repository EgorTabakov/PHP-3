<?php


namespace Decorator\Decorator;


use Decorator\Contract\NotificationInterface;

abstract class NotificationDecorator implements NotificationInterface
{
    protected $notifier;

    /**
     * NotificationDecorator constructor.
     * @param NotificationInterface $notifier
     */
    public function __construct(NotificationInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    /**
     * @param $data
     */
    public function send($data):void
    {
        $this->notifier->send($data);
    }
}