<?php
namespace Design\Src;

/**
 * 绿色车身涂改车间
 */
class ProductGreen implements ProductInterface {

    public function color_make(): String
    {
        return 'this car color is Green';
    }
}