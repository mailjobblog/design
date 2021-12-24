<?php
require 'vendor/autoload.php';
use Design\Src\RedisService;

$redis = RedisService::getInstance("127.0.0.1",6379);
echo $redis->get();