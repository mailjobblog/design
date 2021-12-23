<?php
namespace Design\Src\Factory;

use Design\Src\Product\ProductInterface;
use Design\Src\Product\ProductYellow;
use Design\Src\Quality\QualityYellow;
use Design\Src\Quality\QualityInterface;

class Yellow
{
    public function product() : ProductInterface
    {
        return new ProductYellow();
    }
    public function quality() : QualityInterface
    {
        return new QualityYellow();
    }
}