<?php
require 'vendor/autoload.php';
use Design\Src\Factory\YellowClass;

$factory = new YellowClass();
echo $factory->getObject()->color_make();

