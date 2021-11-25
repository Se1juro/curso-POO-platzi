<?php
require_once("./car.php");

class UberVan extends Car
{
    public $typeCarAccepted;
    public $seatsMAterial;

    public function __construct($license, $driver, $typeCarAccepted, $seatsMAterial)
    {
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMAterial;
    }
}
