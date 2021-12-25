<?php
require "vendor/autoload.php";
use Design\Src\VipState\VipState;
use Design\Src\Services\ItemService;

// new vip
$vip = new VipState();

// new 商品
$item = new ItemService();

// 设置商品价格
$item->setScore(168.76);

// 设置vip等级
$item->setState($vip);

// 计算折扣价
$item->discount();

// 输出折扣价
echo $item->getScore();

