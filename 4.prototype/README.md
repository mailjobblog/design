# 原型模式

## 基础理论

### 介绍

原型模式使用原型实例指定创建对象的种类，并且通过拷贝原型对象创建新的对象。  
原型模式实际上就是从`一个对象`再创建另外一个`可定制的对象`，而且不需要知道任何创建的细节。在初始化的信息不发生变化的情况下，克隆是最好的办法，既隐藏了对象创建的细节，又大大提高了性能。因为如果不用clone，每次new都需要执行一次构造函数，如果构造函数的执行时间很长，那么多次的执行初始化操作就太低效了。  
原型模式重点在从自身赋值自己创建新的类对象，隐藏创建的细节。

![image-20210506134919049](http://img.github.mailjob.net/20210506142121.png)

### 参考文献

- 对象复制clone：https://www.php.net/manual/zh/language.oop5.cloning.php

### 解释Demo

```php
abstract class Prototype
{
    public $v = 'clone' . PHP_EOL;

    public function __construct()
    {
        echo 'create' . PHP_EOL;
    }

    abstract public function __clone();
}
```

首先我们通过模拟的方式定义了一个原型，这里主要是模拟了`__clone()`这个方法。其实这是PHP自带的一个魔术方法，根本是不需要我们去进行定义的，只需要在原型类中进行实现就可以了。**当外部使用clone关键字进行对象克隆时，直接就会进入这个魔术方法中**。在这个魔术方法里面我们可以`对属性进行处理`，特别是针对引用属性进行一些独特的处理。在这个例子中，我们只使用了一个值类型的变量。无法体现出引用类型的问题，我们将在后面的实例中演示对引用类型变量的处理。

```php
class ConcretePrototype1 extends Prototype
{
    public function __clone()
    {
    }
}

class ConcretePrototype2 extends Prototype
{
    public function __clone()
    {
    }
}
```

模拟的具体实现的原型，其实就是主要去具体的实现`__clone()`方法。后面我们看具体的例子时再说明。

```php
class Client
{
    public function operation()
    {
        $p1 = new ConcretePrototype1();
        $p2 = clone $p1;

        echo $p1->v;
        echo $p2->v;
    }
}

$c = new Client();
$c->operation();
```

原型模式看似就是`复制了一个相同的对象`，但是请注意，复制的时候，`__construct()`方法并没有被调用，也就是当你运行这段代码的时候，create只输出了一次。这也就带出了原型模式最大的一个特点—— **减少创建对象时的开销**。  
基于上述特点，我们可以快速的复制大量相同的对象，比如要给一个数组中塞入大量相同的对象时。  
复制出来的对象中如果都是值类型的属性，我们可以任意修改，不会对原型产生影响。而如果有引用类型的变量，则需要在`__clone()`方法进行一些处理，否则修改了复制对象的引用变量中的内容，会对原型对象中的内容有影响。

## 场景化代码实现

### 场景描述

对于高端品牌的汽车生产商来说，为客户进行定制化需求，必不可少。普通的汽车生产商只能定制 颜色、轮胎、玻璃、中控、配饰 等常规配置，没法定制化发动机（默认 V16）。但是对于这次的定制化需求，我们要做一个升级，因为客户给的钱太多了，这次我们要为客户定制发动机（定制 V32）。而我们不可能为了一个客户去开发出一个生产发动机的车间出来，所以我们要做的事情是这样的，对于原来的发动机生产车间复制（ __clone ）出一个来，然后按照客户的需求进行发动机的改造生产。