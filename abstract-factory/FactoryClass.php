<?php
require_once 'Product.php';
/**
 * 定义工厂方法的抽象类
 */
abstract class FactoryClass
{
    abstract protected function factoryMethod();

    public function getObject(){
        return $this->factoryMethod();
    }
}

/**
 * Class Violet
 *
 * 继承抽象类
 */
class Violet extends FactoryClass{
    // 实现抽象方法
    protected function factoryMethod() : VioletClass
    {
        return new VioletClass();
    }
}

class Yellow extends FactoryClass{
    protected function factoryMethod() : YellowClass
    {
        return new YellowClass();
    }
}

class Green extends FactoryClass{
    protected function factoryMethod() : GreenClass
    {
        return new GreenClass();
    }
}

// 客户端测试
$factory = new Yellow();
echo $factory->getObject()->color_make();

// 输出
// this car color is Yellow