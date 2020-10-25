<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay 
{ 

    public function __construct()
    {
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
    }

    public function addVehicle(Vehicle $vehi)
    {
        if($vehi instanceof Car)        
        {
            $this->SetCurrentVehicles($vehi);
        }
        else {
            echo "Non autorisé";
        }

    }
  


  
}
 



