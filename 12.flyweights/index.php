<?php
require 'vendor/autoload.php';
use Design\Src\FlyweightFactory;

// new 享元工厂
$factory = new FlyweightFactory();

// 有了享元可以不用多次new然后多次调用目标类中的方法

// 第一次调用
$flyweight = $factory->get("abc");
$result = $flyweight->render("123");
echo $result.PHP_EOL;

// 第二次调用
$flyweight = $factory->get("ddd");
$result = $flyweight->render("444");
echo $result.PHP_EOL;