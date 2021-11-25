<?php
require_once('./car.php');
require_once('./account.php');

$driver = new Account("Daniel Morales", "114410807");
$car = new Car("KPX993", $driver);


echo "<h3>" . $car->printDataCar() . "</h3>";
