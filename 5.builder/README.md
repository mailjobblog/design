# 建造者模式 ｜ 生成器模式

## 前言

**建造者是创建一个复杂对象的一部分接口**

建造者模式，也可以叫做生成器模式，builder这个词的原意就包含了建筑者、开发者、创建者的含义。  
有时候，如果建造者对他所创建的东西拥有较好的知识储备，这个接口就可能成为一个有默认方法的抽象类（又称为适配器）。  
如果对象有复杂的继承树，那么对于建造者来说，有一个复杂继承树也是符合逻辑的。

注意：建造者通常有一个「[流式接口](https://zh.wikipedia.org/wiki/流式接口)」，例如 PHPUnit 模拟生成器。


## UML

![image-20210507172827154](http://img.github.mailjob.net/20210507172828.png)

## 解释Demo

```php
class Product
{
    private $parts = [];

    public function Add(String $part): void
    {
        $this->parts[] = $part;
    }

    public function Show(): void
    {
        echo PHP_EOL . '产品创建 ----', PHP_EOL;
        foreach ($this->parts as $part) {
            echo $part, PHP_EOL;
        }
    }
}
```

产品类，你可以把它想象成我们要建造的房子。这时的房子还没有任何内容，我们需要给它添砖加瓦。

```php
interface Builder
{
    public function BuildPartA(): void;
    public function BuildPartB(): void;
    public function GetResult(): Product;
}

class ConcreteBuilder1 implements Builder
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function BuildPartA(): void
    {
        $this->product->Add('部件A');
    }
    public function BuildPartB(): void
    {
        $this->product->Add('部件B');
    }
    public function GetResult(): Product
    {
        return $this->product;
    }
}

class ConcreteBuilder2 implements Builder
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function BuildPartA(): void
    {
        $this->product->Add('部件X');
    }
    public function BuildPartB(): void
    {
        $this->product->Add('部件Y');
    }
    public function GetResult(): Product
    {
        return $this->product;
    }
}
```

建造者抽象及其实现。不同的开发商总会选用不同的品牌材料，这里我们有了两个不同的开发商，但他们的目的一致，都是为了去盖房子（Product）。

```php
class Director
{
    public function Construct(Builder $builder)
    {
        $builder->BuildPartA();
        $builder->BuildPartB();
    }
}
```

构造器，用来调用建造者进行生产。没错，就是我们的工程队。它来选取材料并进行建造。同样的工程队，可以接不同的单，但盖出来的都是房子。只是这个房子的材料和外观不同，大体上的手艺还是共通的。

```php
$director = new Director();
$b1 = new ConcreteBuilder1();
$b2 = new ConcreteBuilder2();

$director->Construct($b1);
$p1 = $b1->getResult();
$p1->Show();

$director->Construct($b2);
$p2 = $b2->getResult();
$p2->Show();

复制代码
```

最后看看我们的实现，是不是非常简单，准备好工程队，准备好不同的建造者，然后交给工程队去生产就好啦！！

- 其实这个模式要解决的最主要问题就是一个类可能有非常多的配置、属性，这些配置、属性也并不全是必须要配置的，一次性的实例化去配置这些东西非常麻烦。这时就可以考虑让这些配置、属性变成一个一个可随时添加的部分。通过不同的属性组合拿到不同的对象。

- 上面那一条，在GoF那里的原文是：它使你改变一个产品的内部表示；它将构造代码和表示代码分开；它使你可以对构造过程进行更精细的控制。

- 再说得简单一点，对象太复杂，我们可以一部分一部分的拼装它！

- 了解过一点Android开发的一定不会陌生，创建对话框对象AlterDialog.builder

- Laravel中，数据库组件也使用了建造者模式，你可以翻看下源码中Database\Eloquent和Database\Query目录中是否都有一个Builder.php

## 场景化代码实现

### 场景描述

【建造者模式】来说，就是实现一个复杂的对象中的一部分接口。所以对于场景作如下描述：   
对于一个汽车生产商来说，他们生产的往往是多种汽车，而不同的汽车类型，对应的生产规格都是不同的。例如卡车是6个轮子，农用车是3个轮子。而文中提到的轮子，就是上文中说到的 “一部分接口”，汽车的生产往往是一个非常负责的过程，我们这次要做的事，是实现这个整体过程中的一部分接口（轮子），我们会单独把它抽离出来，然后方法中去实现它。

### 代码实现

- builder.php 文件中 `BuilderInterface{}` 作为建造者接口设定了建造汽车的每个步骤，`TruckBuilder{}` 和 `CarBuilder{}` 实现了它
- makeProduct.php 文件中，`Engine{}` 、`Tyre{}` 、`Door{}` 、定义了建造汽车部件的具体内容
- product.php 文件中，`AssemblePart{}` 定义了组装汽车的方法。`Truck{}` 和 `Farm{}` 则继承了 `AssemblePart{}` 获取组装部件的方法
- `Director{}` 的 `build()` 让车构造了起来







