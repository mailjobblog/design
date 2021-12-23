<?php
/**
 * Interface Product
 *
 * 定义接口类
 */
interface Product{
    public function color_make() : String;
}

/**
 * 紫色车身涂改车间
 */
class VioletClass implements Product{
    public function color_make(): String
    {
        return 'this car color is Violet';
    }
}

/**
 * 黄色车身涂改车间
 */
class YellowClass implements Product{
    public function color_make(): String
    {
        return 'this car color is Yellow';
    }
}

/**
 * 绿色车身涂改车间
 */
class GreenClass implements Product{
    public function color_make(): String
    {
        return 'this car color is Green';
    }
}
