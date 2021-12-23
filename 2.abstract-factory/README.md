# 工厂方法

## 前言

工厂方法模式和简单工厂相比较，就是把：实现推迟到了继承改工厂类的子类中实现。

**可以这样理解：**

1、首先定义一个基础的工厂类  
2、然后一堆的子类去继承这个工厂类，并且实现工厂类中的抽象方法  
3、 最终，返回 product 的实例化对象


## UML

![工厂方法结构类图](http://img.github.mailjob.net/20210430111306)

- 图中 `Product` 为产品
- 图中 `Creator` 为创建者
- `Creator` 中有一个抽象的 `FactoryMethod()` 工厂方法
- `ConcreteCreator` 继承这个工作的抽象类，并且要实现 `FactoryMethod()` 这个抽象方法
- 创建的父类 `Creator` 可以有一个 `AnOoeration()` 方法，用户直接返回 `Product` （也可以使用`FactoryMethod()`去返回）。但是我们去统一的调用一个对外的 `AnOoeration()`  方法

## 解释Demo

**工厂类的实现**

```php
// 创建者抽象类
abstract class Creator{

    // 抽象工厂方法
    abstract protected function FactoryMethod() : Product;

    // 操作方法
    public function AnOperation() : Product{
        return $this->FactoryMethod();
    }
}

// 创建者实现类A
class ConcreteCreatorA extends Creator{
    // 实现操作方法
    protected function FactoryMethod() : Product{
        return new ConcreteProductA();
    }
}
```

**相关商品类的实现：**

```php
// 商品接口
interface Product{
    function show() : void;
}

// 商品实现类A
class ConcreteProductA implements Product{
    public function show() : void{
        echo "I'm A.\n";
    }
}
```

工厂类中的实现，我们相比简单工厂，去掉了 swith ，然后让每个具体的实现类来创建对象。

从这里体现了对象的两个特点：**单一**，**封闭**。

每个继承于父工厂类的子类，只和一个 product 有耦合，和其他的 product 没有耦合，通过这个方法，对程序也起到了结偶的作用。该工厂子类和其他子类之间完全没有关系。

## 场景化代码实现

### 场景描述

书接上回，对于高端品牌的汽车生产商来说，为客户进行定制化需求，必不可少。现在，我要把这个生产车间，再次进行升级，我不想要中心工厂判断，到底要把需求交给哪个车间制作。我想做的是，让各个车间各司其职，彼此的工作互不干扰。所以，接着这个思路，继续对这个软件逻辑进行解耦。

### 代码

**FactoryClass.php**

```php
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
```

**Product.php**

```php
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
```

