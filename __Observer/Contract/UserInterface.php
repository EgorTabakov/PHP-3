<?php


namespace Observer\Contract;


interface UserInterface
{
    public function getUserName();

    public function getUserEmail();

    public function getUserExperience();
}