<?php
require 'vendor/autoload.php';
use Design\Src\Director\Director;
use Design\Src\Builder\BikeBuilder;
use Design\Src\Builder\CarBuilder;

$director = new Director();


$carBuild = new CarBuilder();
$bileBuild = new BikeBuilder();


$director->build($carBuild);
$car = $carBuild->getAssemblePart();
$show = $car->Show();
var_dump($show);


$director->build($bileBuild);
$car = $bileBuild->getAssemblePart();
$show = $car->Show();
var_dump($show);