<?php

// HighWay.php

abstract class HighWay
{   
    /**
    * @var array
    */
    //protected $currentVehicles;
    protected $currentVehicles=array();

    /**
    * @var integer 
    */
    protected $nbLane;

    /**
    * @var integer
    */
    protected $maxSpeed;


    abstract public function addVehicle(Vehicle $vehi);


    public function getCurrentVehicles(): string
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(Vehicle $Vehicle): void
    {
        array_push($this->currentVehicles,$Vehicle);   

    }

    public function recupTab():array
    {
        return $this->currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}