<?php
require_once('./car.php');
require_once('./uberX.php');
require_once('./uberPool.php');
require_once('./account.php');

$driver = new Account("Daniel Morales", "114410807");
$uberX = new UberX("KPX993", new Account("Daniel", "1144108017"), "Renault", "Kwid");


echo "<h3>" . $uberX->printDataCar() . "</h3>";

$uberPool = new UberPool("CPC835", new Account("Jhon", "1111111"), "Hyundai", "Accent");
echo "<h3>" . $uberPool->printDataCar() . "</h3>";
