<?php
$bmw = [
    "model" => "X5",
    "speed" => "120",
    "doors" => "5",
    "year" => "2015"
];
$toyota = [
    "model" => "corolla",
    "speed" => "180",
    "doors" => "4",
    "year" => "2018"
];
$opel = [
    "model" => "astra",
    "speed" => "130",
    "doors" => "5",
    "year" => "2011"
];

$cars = [
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel
];

foreach ($cars as $car => $data) {
    $info = "";
    foreach ($data as $key => $value) {
        $info .= $value . " ";
    }
    echo "CAR {$car}";
    echo "<br/>" . $info . "<br/>";
}
