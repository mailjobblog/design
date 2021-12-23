<?php
require 'vendor/autoload.php';
use Design\Src\FactoryAbstract;

// test
echo FactoryAbstract::createProduction('violet')->color_make();
// 输出: this car color is Violet