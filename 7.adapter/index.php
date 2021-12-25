<?php
require 'vendor/autoload.php';
use Design\Src\Product\PoneProduct;
use Design\Src\Adapter\Adapter;

$adapter = new Adapter(new PoneProduct());

echo $adapter->make_color();
echo PHP_EOL;
echo $adapter->quality();
echo PHP_EOL;