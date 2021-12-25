<?php
require 'vendor/autoload.php';
use Design\Src\Renderable\Webservice;
use Design\Src\Renderer\XmlRenderer;

// 实例化目标类
$service = new Webservice("this is test string");

// 实例化装饰器类
$service_xml = new XmlRenderer($service);

// 调用装饰器类的接口
// 装饰器类的接口会调用目标类的接口，然后对返回的数据进行装饰
$result = $service_xml->renderData();

echo $result;