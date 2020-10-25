<?php

require_once 'Vehicle.php';

 class Truck extends Vehicle 
{
    //Constantes
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    //Attributs
    /**
       * @var string
       */
    private $energy;

    /**
       * @var string
       */
    private $energyLevel;

    /**
       * @var int
       */
      private $storageCapacity;

    /**
       * @var int
       */
      private $loading;


    //Function


    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
        $this->setLoading(0);
    }

    
    public function start() :string
    {
        if ($this->currentSpeed ===0 ) {
            $this->currentSpeed=5;
            return "Start !";
            }else{
            return "No need to start!";
            }
        
    }

    public function load() :string
    {         
          if ($this->loading <> $this->storageCapacity)
          {
              return "in filling";
          } else{
              return "full";
          }
    }

    //Energy
    public function getEnergy() :int
    {
        return $this->energy;
    }
   

    public function setEnergy(string $energy): Truck
    {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
    }

    //Energy Level
    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    // Storage capacity

    public function getStorageCapacity() : int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    // Loading

    public function getLoading() : int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading= $loading;
    }

 
}
 



