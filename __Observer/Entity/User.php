<?php

namespace Observer\Entity;

use Observer\Contract\UserInterface;
use SplObserver;

class User implements SplObserver
{
    private $userName;
    private $userEmail;
    private $userExperience;

    public function __construct($userName, $userEmail, $userExperience)
    {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userExperience = $userExperience;
    }

    public function update($subject)
    {
        echo "Сообщение пользователю   " . $this->getUserName() . "  на адрес   " . $this->getUserEmail() . ":   Появилась новая вакансия: " . $subject->getNameVacancy() . "</br>" .
            "Предлагаемый оклад: " . $subject->getCoastVacancy() . "  Руб" . "</br>";
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function getUserEmail()
    {
        return $this->userEmail;
    }

    public function getUserExperience()
    {
        return $this->userExperience;
    }
}