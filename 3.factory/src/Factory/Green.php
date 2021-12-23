<?php
namespace Design\Src\Factory;

use Design\Src\Product\ProductGreen;
use Design\Src\Product\ProductInterface;
use Design\Src\Product\QualityGreen;
use Design\Src\Quality\QualityInterface;

class Green
{
    public function product() : ProductInterface
    {
        return new ProductGreen();
    }
    public function quality() : QualityInterface
    {
        return new QualityGreen();
    }
}