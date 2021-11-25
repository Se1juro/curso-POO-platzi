<?php
class Car
{
    public int $id;
    public string $license;
    public Account $driver;
    public string $passenger;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar()
    {
        return "License: $this->license\t" . "Conductor: " . $this->driver->name . " Document: " . $this->driver->document;
    }
}
