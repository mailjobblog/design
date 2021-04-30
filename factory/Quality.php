<?php
/**
 * Interface Product
 *
 * 定义接口类 - 质检车间
 */
interface Quality{
    public function check() : String;
}

/**
 * 紫色车质检车间
 */
class VioletQualityClass implements Quality{
    public function check(): String
    {
        return 'Violet check ing';
    }
}

/**
 * 黄色车质检车间
 */
class YellowQualityClass implements Quality{
    public function check(): String
    {
        return 'Yellow check ing';
    }
}

/**
 * 绿色车质检车间
 */
class GreenQualityClass implements Quality{
    public function check(): String
    {
        return 'Green check ing';
    }
}
