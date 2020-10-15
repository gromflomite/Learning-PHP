<?php

class car
{
    private $brand;
    private $model;

    // Setters
    public function setBrand($brand)
    {

        $isString = is_string($brand);

        if ($isString) {

            $this->brand = $brand;
            echo "Is a string" . "\r\n";

        } else {

            echo "Is not a string" . "\r\n";
        }
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    // Getters
    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }
}

// Just testing

$car1 = new car;

$car1->setBrand(1);
$car1->setModel("Bronco");

echo $car1->getBrand();
