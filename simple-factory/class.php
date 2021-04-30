<?php
/**
 * Class FactoryClass
 *
 * 简单工厂
 *
 * 场景：汽车表层刷漆工厂
 */
class FactoryClass
{
    /**
     * 实现汽车上色
     */
    public static function production(string $color) {
        switch ($color)
        {
            case 'violet':
                return new VioletClass();
                break;
            case 'yellow':
                return new YellowClass();
                break;
            case 'green':
                return new GreenClass();
                break;
        }
    }
}

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
        return 'this car color is Violet';
    }
}

/**
 * 绿色车身涂改车间
 */
class GreenClass implements Product{
    public function color_make(): String
    {
        return 'this car color is Violet';
    }
}

// 客户端调用实现
$factory = new FactoryClass();
$class = $factory->production('violet');
echo $class->color_make();

// 输出
// this car color is Violet
