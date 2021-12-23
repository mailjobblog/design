<?php
require 'vendor/autoload.php';
use Design\Src\Factory\Yellow;

// 客户端测试
$factory = new Yellow();

// 车身涂色
echo $factory->product()->color_make();

echo "\n";

// 汽车安检
echo $factory->quality()->check();

