<?php

include_once 'object.php';

$car2 = new car;

$car2->setBrand("Fiat");
$car2->setModel("500");

echo "Initial get: " . $car1->getBrand() . "\n";
$car1->setBrand("Dacia");
echo "Second get: " . $car1->getBrand();

$car1Model = $car1->getModel();

//echo $car1Model;