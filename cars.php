<?php

class Car {

    public $model;

    public function __construct($m) {
        $this->model = $m;

    }
}

$car = new Car('Audi');
$car2 = new Car('BMW');
$car3 = new Car('Opel');

var_dump($car->model);
var_dump($car2->model);
var_dump($car3->model);