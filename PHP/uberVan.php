<?php
require_once("./car.php");

class UberVan extends Car
{
    public string $typeCarAccepted;
    public string $seatsMaterial;

    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial)
    {
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }

    public function setPassenger($passenger)
    {
        if ($passenger >= 6) {
            $this->passenger = $passenger;
        } else {
            echo "Se debe asignar 6 pasajeros";
        }
    }

    public function printDataCar()
    {
        return "License: " . parent::getLicense() . "\tConductor: " . parent::getDriver()->name . " Document: " . parent::getDriver()->document . "\nType car: " . $this->typeCarAccepted . "\nSeats Material: " . $this->seatsMaterial;
    }
}
