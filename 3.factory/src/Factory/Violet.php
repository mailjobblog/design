<?php
namespace Design\Src\Factory;

use Design\Src\Product\ProductInterface;
use Design\Src\Product\ProductViolet;
use Design\Src\Product\QualityViolet;
use Design\Src\Quality\QualityInterface;

class Violet
{
    public function product() : ProductInterface
    {
        return new ProductViolet();
    }
    public function quality() : QualityInterface
    {
        return new QualityViolet();
    }
}