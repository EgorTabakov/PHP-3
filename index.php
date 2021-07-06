<?php

namespace Decorator;

use Decorator\Decorator\SMSNotification;
use Decorator\Decorator\EmailNotification;
use Decorator\Decorator\VKNotification;
use Decorator\Service\BaseNotification;


spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Decorator/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$notification = new BaseNotification();
$notification = new EmailNotification($notification);
$notification = new SMSNotification($notification);
$notification = new VKNotification($notification);
$notification->send("Hello world");