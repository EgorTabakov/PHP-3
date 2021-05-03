<?php

namespace Decorator;


use Observer\Entity\User;
use Observer\Entity\Vacancy;
use Observer\Observers\NewVacancyObserver;
use Strategy\Entity\Order;
use Strategy\Service\Payment;
use Strategy\Service\Qiwi;
use Strategy\Service\WebMoney;
use Strategy\Service\Yandex;


spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Strategy/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$order = new Order("55.44", "+777777777");
$order2 = new Order("45.44", "+787777777");
$order3 = new Order("35.44", "+797777777");
$qiwi = new Qiwi();
$yandex = new Yandex();
$webMoney = new WebMoney();

 function testStrategy($paymentType, $order)
{


    $payment = new Payment();


    $elements = $payment->payment($paymentType, $order);
}

testStrategy($qiwi, $order);
testStrategy($yandex, $order2);
testStrategy($webMoney, $order3);





