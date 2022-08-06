<?php
require_once("./account.php");
class Car
{
    private string $license;
    private Account $driver;
    private string $passenger;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar()
    {
        return "License: $this->license\t" . "Conductor: " . $this->driver->name . " Document: " . $this->driver->document;
    }

    public function getPassenger()
    {
        return $this->passenger;
    }

    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;
    }

    public function getLicense()
    {
        return $this->license;
    }

    public function setLicense($license)
    {
        $this->license = $license;
    }

    public function getDriver()
    {
        return $this->driver;
    }

    public function setDriver($driver)
    {
        $this->driver = $driver;
    }
}
