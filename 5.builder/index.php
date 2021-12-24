<?php
require 'vendor/autoload.php';
use Design\Src\Director\Director;
use Design\Src\Builder\BikeBuilder;
use Design\Src\Builder\CarBuilder;


// Director：指挥者
// 将复杂对象划分为各个详情对象的建造请求

// Builder：建造者
// 将复杂对象划分为各个详情对象的建造请求(轮子、座椅、发动机)


# 方法一

// 指挥者
$director = new Director();


// 生产汽车
$carBuild = new CarBuilder();
$director->build($carBuild);
$car = $carBuild->getAssemblePart();
$show = $car->Show();
var_dump($show);


// 生产自行车
$bikeBuild = new BikeBuilder();
$director->build($bikeBuild);
$bike = $bikeBuild->getAssemblePart();
$show = $bike->Show();
var_dump($show);



# 方法二

// 建造者链式调用
$bike = new BikeBuilder();
$result = $bike->addWheel()->addEngine()->build();
echo $result;

