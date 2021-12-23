<?php
namespace Design\Src\Product;

/**
 * 紫色车身涂改车间
 */
class ProductViolet implements ProductInterface{

    public function color_make(): String
    {
        return 'this car color is Violet';
    }
}