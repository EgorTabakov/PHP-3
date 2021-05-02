<?php

namespace Decorator;


use Observer\Entity\User;
use Observer\Entity\Vacancy;
use Observer\Observers\NewVacancyObserver;


spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Observer/', '', $className);
    require_once __DIR__ . $className . '.php';
});


$vacancy = new Vacancy();

//регистрируем соискателя
$observer = new User('Василий', 'v@gb.ru', '5');
$observer2 = new User('Петр', 'з@gb.ru', '6');

//наблюдаем за вакансиями
$vacancy->attach($observer);
$vacancy->attach($observer2);



//Размещаем вакансию
$vacancy->SetNewVacancy('Программист', '5000');
$vacancy->SetNewVacancy('Программист2', '3000');

//Отписываемся от получения сообщений
//$vacancy->detach($observer2);