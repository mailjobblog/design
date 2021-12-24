<?php
require 'vendor/autoload.php';
use Design\Src\RedisService;

echo RedisService::getInstance("127.0.0.1",6379)->get();
