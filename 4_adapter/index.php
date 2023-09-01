<?php
require_once 'vendor/autoload.php';

use AdapterPattern\Viecule;
use AdapterPattern\Car;
use AdapterPattern\Becycle;
use AdapterPattern\VieculeAdapter;
function tostring(Viecule $viecule){
    echo "color: {$viecule->color()}, speed: {$viecule->speed()}, sets: {$viecule->setsNumber()}";
}


$car = new Car();
$bc = new VieculeAdapter(new Becycle);


tostring($car);
//tostring($bc);
tostring($bc);