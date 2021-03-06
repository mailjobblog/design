# 简单工厂

## 前言

对于工厂模式主要分为：**简单工厂，工厂模式，抽象工厂**。  
简单工厂模式是一个精简版的工厂模式。  
它与静态工厂模式最大的区别是它不是『静态』的。因为非静态，所以你可以拥有多个不同参数的工厂，你可以为其创建子类。甚至可以模拟（Mock）他，这对编写可测试的代码来讲至关重要。 这也是它比静态工厂模式受欢迎的原因！

## UML

![image-20210429192738179](http://img.github.mailjob.net/20210429192739.png)

## 场景描述

高端的汽车品牌，会根据顾客的需求，完成定制化的需求。常见的汽车颜色有：黑，白，红，蓝，灰。如果你想按照自己的需求定制，比如你想要：紫色，黄色，绿色。则会按照你的定制化需求，到达不同的流水线工作。


## 解释Demo

先从一个简单的代码开始看起，先实现一个工厂方法

```
// 工厂类
class Factory
{
    public static function createProduct(string $type) : Product
    {
        $product = null;
        switch ($type) {
            case 'A':
                $product = new ProductA();
                break;
            case 'B':
                $product = new ProductB();
                break;
        }
        return $product;
    }
}
```

然后在接下来的代码中，实现 产品接口 和 产品

```
// 接口类
interface Product
{
    public function show();
}

// 实现类 A
class ProductA implements Product
{
    public function show()
    {
        echo 'Show ProductA';
    }
}

// 实现类 B
class ProductB implements Product
{
    public function show()
    {
        echo 'Show ProductB';
    }
}
```

最后客户端实现逻辑

```
// Client
$productA = Factory::createProduct('A');
$productB = Factory::createProduct('B');
$productA->show();
$productB->show();
```
