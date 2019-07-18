<?php

function createCar($model, $speed, $doors, $years)
{
    $carTemplate = [
        "model" => $model,
        "speed" => $speed,
        "doors" => $doors,
        "year" => $years
    ];
    return $carTemplate;
}

$bmw = createCar("X5", "120", "5", "2015");
$toyota = createCar("corolla", "180", "4", "2018");
$opel = createCar("astra", "130", "5", "2011");

$cars = [
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel
];

function dataCarOutput($car, $data)
{
    $info = "";
    foreach ($data as $key => $value) {
        $info .= $value . " ";
    }
    echo "CAR {$car}";
    echo "<br/>";
    echo $info;
    echo "<br/>";
}

foreach ($cars as $car => $data) {
    dataCarOutput($car, $data);
}
