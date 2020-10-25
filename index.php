<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

//tableau résultat
$tabFinal= array();

//Vehicules
$cars = new Car ('blue',5,'diesel');
$bike = new Bicycle ('red',1);
$skateboard = new Skateboard ('Yellow', 0);

//Voies
$Motorway=new Motorway();
$PedestrianWay=new PedestrianWay();
$ResidentialWay=new ResidentialWay();


//ajout cars dans motorway
$Motorway->addVehicle($cars);
if (!empty($Motorway->recupTab()))
{
    array_push($tabFinal,$Motorway->recupTab());  
}

//ajout skateboard dans pedestrianway
$PedestrianWay->addVehicle($skateboard);
if (!empty($PedestrianWay->recupTab()))
{
    array_push($tabFinal,$PedestrianWay->recupTab());
}

//ajout bike dans residentialway
$ResidentialWay->addVehicle($bike);
if (!empty($ResidentialWay->recupTab()))
{
    array_push($tabFinal,$ResidentialWay->recupTab());
}

var_dump($tabFinal);