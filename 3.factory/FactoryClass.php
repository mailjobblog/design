<?php
require_once 'Product.php';
require_once 'Quality.php';
/**
 * 定义工厂方法的抽象类
 */
interface FactoryClass
{
    public function product() : Product;

    public function quality() : Quality;
}

/**
 * Class Violet
 *
 * 继承抽象类
 */
class Violet implements FactoryClass{
    // 实现抽象方法
    public function product() : Product
    {
        return new VioletClass();
    }

    // 实现抽象方法
    public function quality() : Quality
    {
        return new VioletQualityClass();
    }
}

class Yellow implements FactoryClass{
    public function product() : Product
    {
        return new YellowClass();
    }
    public function quality() : Quality
    {
        return new YellowQualityClass();
    }
}

class Green implements FactoryClass{
    public function product() : Product
    {
        return new GreenClass();
    }
    public function quality() : Quality
    {
        return new GreenQualityClass();
    }
}

// 客户端测试
$factory = new Yellow();

// 车身涂色
echo $factory->product()->color_make();

echo "\n";

// 汽车安检
echo $factory->quality()->check();

// 输出
// this car color is Yellow
// Yellow check ing