<?php
require_once 'interface.php';
require_once 'abstract.php';
// 测试
// 随意组合：这里涂改蓝色车身，然后在2号车间检测

// 3个车身涂改车间
$yellow = new Yellow();
$red = new Red();
$blue = new Blue();

// 2个检测车间
$quality1 = new Quality1();
$quality2 = new Quality2();

// 按照上述需求组合
$quality2->setColorService($blue);
$quality2->quality();

// 返回
// this car color is Blue。The Cart Very OK