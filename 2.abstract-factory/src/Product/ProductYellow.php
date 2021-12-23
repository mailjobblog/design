<?php
namespace Design\Src\Product;

/**
 * 黄色车身涂改车间
 */
class ProductYellow implements ProductInterface{

    public function color_make(): String
    {
        return 'this car color is Yellow';
    }
}

