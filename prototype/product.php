<?php
require_once 'interface.php';

class Car{
    // 发动机引擎
    public $engineProvicer;
    // 轮胎个数
    public $tyreNum;
    // 座椅材质
    public $chair;
}

class BentleyCar extends Car{
    function __clone(){
        $this->engineProvicer = new Bentley();
    }
}

class FerrariCar extends Car{
    function __clone(){
        $this->engineProvicer = new Ferrari();
    }
}

// 测试
$bentleyCar = new BentleyCar();
$bentleyCar->tyreNum = 4;
$bentleyCar->chair = '羊皮';
$bentleyCar->engineProvicer = new Bentley();
$bentleyCar->engineProvicer->engine = 'V16';
$bentleyCar1 = clone $bentleyCar;
$bentleyCar1->engineProvicer->engine = 'V32';

//var_dump($bentleyCar);
//echo PHP_EOL;
//var_dump($bentleyCar1);
//echo PHP_EOL;

echo $bentleyCar->engineProvicer->getEngine();
echo PHP_EOL;
echo $bentleyCar1->engineProvicer->getEngine();

// 输出
//宾利-发动机引擎：V16
//宾利-发动机引擎：V32
