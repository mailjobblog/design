<?php
require 'vendor/autoload.php';
use Design\Src\RedisCache;

$redis = new RedisCache();

// 测试调用区别方法
$redis->connect("127.0.0.1",6379,123);

// 测试调用公共方法
$redis->set("aaa","bbb");
echo $redis->get("aaa");