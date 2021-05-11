<?php
require_once 'Adapter.php';
require_once 'Adaptee.php';

// 测试
$adaptee = new RedClassAdaptee();
$adapter = new Adapter($adaptee);
echo $adapter->make_color();
echo "\n";
echo $adapter->quality();

// 返回
// this car color is Red
// this red car ok
