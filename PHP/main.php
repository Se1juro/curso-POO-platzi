<?php
require_once('./car.php');
require_once('./uberX.php');
require_once('./uberPool.php');
require_once('./account.php');
require_once('./payment.php');
require_once("./paypal.php");
require_once('./driver.php');
require_once("./uberVan.php");

$driver = new Driver("Daniel Morales", "114410807");
$uberX = new UberX("KPX993", new Account("Daniel", "1144108017"), "Renault", "Kwid");


echo "<h3>" . $uberX->printDataCar() . "</h3>";

$uberPool = new UberPool("CPC835", new Account("Jhon", "1111111"), "Hyundai", "Accent");
echo "<h3>" . $uberPool->printDataCar() . "</h3>";

$paypal = new Paypal(1234, "mralejo99@gmail.com");
echo "<h3>" . $paypal->printPayment() . "</h3>";

$uberVan = new UberVan("KKK000", new Account("Camilo", "1111111"), "Hyundai", "Cuero");
echo "<h3>" . $uberVan->printDataCar() . "</h3>";
