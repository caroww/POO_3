<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay 
{ 

    public function __construct()
    {
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
    }

    public function addVehicle(Vehicle $vehi)
    {
        if(($vehi instanceof Bicycle) || ($vehi instanceof Skateboard))        
        {
            $this->SetCurrentVehicles($vehi);
        }
        else {
            echo "Non autorisé";
        }
    }
 


    
}
 



