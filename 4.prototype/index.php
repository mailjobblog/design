<?php
require 'vendor/autoload.php';
use Design\Src\Car\BentleyCar;
use Design\Src\Engine\BentleyEngine;

$bentleyCar = new BentleyCar();
$bentleyCar->setChair("羊皮");
$bentleyCar->category = new BentleyEngine(); // 填充 [原型] 对象类
$bentleyCar->category->setEngine("钻石V16发动机");

echo "fun1".PHP_EOL;
echo $bentleyCar->getChair();
echo PHP_EOL;
echo $bentleyCar->category->getEngine();
echo PHP_EOL;

// 克隆对象
// 用 [原型模式] 实现一个新的对象
$bentleyCar_clone = clone $bentleyCar;
$bentleyCar_clone->category->setEngine("破铜烂铁v1发动机");

echo "fun2".PHP_EOL;
echo $bentleyCar_clone->getChair();
echo PHP_EOL;
echo $bentleyCar_clone->category->getEngine();
echo PHP_EOL;

echo "fun3".PHP_EOL;
echo $bentleyCar->category->getEngine();
echo PHP_EOL;
