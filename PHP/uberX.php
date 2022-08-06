<?php
require_once("./car.php");
class UberX extends Car
{
    public string $brand;
    public string $model;

    public function __construct($license, $driver, $brand, $model)
    {
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }

    public function printDataCar()
    {
        return "License: " . parent::getLicense() . "\tConductor: " . parent::getDriver()->name . " Document: " . parent::getDriver()->document . "\nBrand: " . $this->brand . "\nModel: " . $this->model;
    }
}
