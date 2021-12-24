# 抽象工厂


## 前言

在不指定具体类的情况下创建一系列相关或依赖对象。 通常创建的类都实现相同的接口。 抽象工厂的客户并不关心这些对象是如何创建的，它只是知道它们是如何一起运行的。

**可以这样解释：**

在【工厂方法】中实现的是一个对象的单一原则，即把 `实例化` 推迟到了子类中完成，完成了子类上的解藕。那么【抽象工厂】做的事情则是，提供一个创建一系列相关或者互相依赖的对象的接口，而无需指定它们的具体类。

**抽象工厂最适合什么场景？很明显，一系列相关对象的创建**

## UML

![image-20210430135759297](http://img.github.mailjob.net/20210430135800.png)

- 左边，`工厂1`和`工厂2`，都继承了一个`抽象工厂`，且都实现了，抽象工厂中定义的 `CreateProductA()` 方法 `CreateProductA()` 方法
- 从左边的图可以看出，`工厂1` 生产的是 `ProductA1` 和 `ProductB1`
- 从右边的图可以看出，`AbstractProductA` 实现的是 `ProductA1` 和 `ProductB1` 的生产（这两个是功能类似的产品）。

## 解释Demo

抽象工厂：工厂1和工厂2，工厂1生产的是A1和B1这两种相关联的产品，工厂2生产的是A2和B2这两种商品

```php
// 抽象工厂接口
interface AbstractFactory
{
    // 创建商品A
    public function CreateProductA(): AbstractProductA;
    // 创建商品B
    public function CreateProductB(): AbstractProductB;
}

// 工厂1，实现商品A1和商品B1
class ConcreteFactory1 implements AbstractFactory
{
    public function CreateProductA(): AbstractProductA
    {
        return new ProductA1();
    }
    public function CreateProductB(): AbstractProductB
    {
        return new ProductB1();
    }
}

// 工厂2，实现商品A2和商品B2
class ConcreteFactory2 implements AbstractFactory
{
    public function CreateProductA(): AbstractProductA
    {
        return new ProductA2();
    }
    public function CreateProductB(): AbstractProductB
    {
        return new ProductB2();
    }
}
```

商品的实现，东西很多吧，这回其实是有四件商品了分别是A1、A2、B1和B2，他们之间假设有这样的关系，A1和B1是有关联性或者依赖性的商品，B1和B2是有关联性或者依赖性的商品

```php
// 商品A抽象接口
interface AbstractProductA
{
    public function show(): void;
}

// 商品A1实现
class ProductA1 implements AbstractProductA
{
    public function show(): void
    {
        echo 'ProductA1 is Show!' . PHP_EOL;
    }
}
// 商品A2实现
class ProductA2 implements AbstractProductA
{
    public function show(): void
    {
        echo 'ProductA2 is Show!' . PHP_EOL;
    }
}

// 商品B抽象接口
interface AbstractProductB
{
    public function show(): void;
}
// 商品B1实现
class ProductB1 implements AbstractProductB
{
    public function show(): void
    {
        echo 'ProductB1 is Show!' . PHP_EOL;
    }
}
// 商品B2实现
class ProductB2 implements AbstractProductB
{
    public function show(): void
    {
        echo 'ProductB2 is Show!' . PHP_EOL;
    }
}
```

**总结：**

通过上面的举例，我们可以看到，工厂 `AbstractProductA`  实现的是 `ProductA1` 和 `ProductA2` 商品的生产；工厂 `AbstractProductB`  实现的是 `ProductB1` 和 `ProductB2` 商品的生产。

那衣帽厂商来说，工厂A（AbstractProductA），实现的是 风衣的生产（ProductA1） 和 衣服质检（ProductA2），那么这个关系就是上文中提到的相关或者依赖的关系，或者说流程化关系吧。在这里，因为只有风衣生产出来了，才能开始做衣服质检。

## 场景化演示

### 场景描述

对于上面的描述，如果看的还是有的晕，没有关系。我们接着之前的那个案例进行讲解！

对于高端品牌的汽车生产商来说，为客户进行定制化需求，必不可少。客户想要什么颜色的汽车，我们就得根据需求，给他做出不同颜色的汽车。在喷漆完成之后，那么必要的质量安检工作也必不可少。这里，我们给它分配相对应的车间，完成安检工作。

反正就好比做项目一样，你的项目组的测试只管该项目组的测试工作，不回去搭理别的项目组的测试工作。

### 代码实现

该工厂类，实现的逻辑如下：

- 首先定义一个工厂的接口类，定义两个接口，分别是 `车身涂装` 接口和 `汽车质检` 接口
- 每款颜色的生产车间，分别实现以上两个接口，并且返回对应的对象
- 每个颜色的车身，生产出来以后，就需要进入下一个质检流程
- 抽象工厂最适合什么场景？很明显，一系列相关对象的创建

```php
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
```

