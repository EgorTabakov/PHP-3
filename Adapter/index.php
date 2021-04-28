<?php

namespace Decorator;


use Adapter\Adapter\CircleAdapter;
use Adapter\Adapter\SquareAdapter;
use Adapter\Library\CircleAreaLib;
use Adapter\Library\SquareAreaLib;


spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Adapter/', '', $className);
    require_once __DIR__ . $className . '.php';
});


function testAdapterCircle($paramCircle)
{

    $circleAdapter = new CircleAdapter(new CircleAreaLib());
    echo $circleAdapter->circleArea($paramCircle);
}

function testAdapterSquare($paramSquare)
{

    $squareAdapter = new SquareAdapter(new SquareAreaLib());
    echo $squareAdapter->squareArea($paramSquare) . "</br>";
}

testAdapterSquare(2);
testAdapterCircle(4);