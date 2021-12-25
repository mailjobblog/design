<?php
require 'vendor/autoload.php';
use Design\Src\Proxy\Proxy;

// 通过代理类访问目标类
$proxy = new Proxy();
echo $proxy->request();