<?php


namespace Observer\Entity;


use SplObjectStorage;
use SplObserver;
use SplSubject;

class Vacancy implements SplSubject
{
    private $nameVacancy;
    private $coastVacancy;
    private $observers;

    public function __construct()
    {
               $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @param string $nameVacancy
     * @param string $coastVacancy
     */
    public function SetNewVacancy(string $nameVacancy, string $coastVacancy): void
    {
        $this->nameVacancy = $nameVacancy;
        $this->coastVacancy = $coastVacancy;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getNameVacancy(): string
    {
        return $this->nameVacancy;
    }

    /**
     * @return int
     */
    public function getCoastVacancy(): int
    {
        return $this->coastVacancy;
    }

}