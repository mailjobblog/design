<?php
require 'vendor/autoload.php';
use Design\Src\Workshop;
use Design\Src\WorkshopLine;

// 简单组合测试
$workshop = new Workshop('总生产车间');
$workshop->add(new WorkshopLine('车轮胎产品线'));
$workshop->message();

// 输出
/*
开始发送Workshop角色：总生产车间下的所有用户短信
开始发送WorkshopLine角色：车轮胎产品线下的所有用户短信
 */

// 多级组合测试
$work = new Workshop('总生产车间');

$one = new Workshop('1号轮胎车间');
$one->add(new WorkshopLine('1号-生产轮胎的钢圈'));
$one->add(new WorkshopLine('1号-生产轮胎的钢圈'));

$two = new Workshop('2号车窗车间');
$two->add(new WorkshopLine('2号-生产玻璃的有机材料'));
$two->add(new WorkshopLine('2号-生产玻璃的密封条'));

$work->add($one);
$work->add($two);
$work->message();

/*
开始发送Workshop角色：总生产车间下的所有用户短信
开始发送Workshop角色：1号轮胎车间下的所有用户短信
开始发送WorkshopLine角色：1号-生产轮胎的钢圈下的所有用户短信
开始发送WorkshopLine角色：1号-生产轮胎的钢圈下的所有用户短信
开始发送Workshop角色：2号车窗车间下的所有用户短信
开始发送WorkshopLine角色：2号-生产玻璃的有机材料下的所有用户短信
开始发送WorkshopLine角色：2号-生产玻璃的密封条下的所有用户短信
 */