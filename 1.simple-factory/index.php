<?php
require 'vendor/autoload.php';

use Design\Src\FactoryClass;

// test
echo FactoryClass::createProduction('violet')->color_make();
// 输出: this car color is Violet