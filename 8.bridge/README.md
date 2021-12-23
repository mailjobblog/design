# 桥接模式

## 前言

***GoF定义：将抽象部分与它的实现部分分离，使它们都可以独立地变化。***

桥接模式，在程序世界中，其实就是组合/聚合的代名词。为什么这么说呢？熟悉面向对象的我们都知道继承的好处，子类可以共享父类的很多属性、功能。但是，继承也会带来一个问题，那就是严重的耦合性。父类的修改多少都会对子类产生影响，甚至一个方法或属性的修改都有可能让所有子类都去修改一遍。这样就违背了开放封装原则。而桥接就是为了解决这个问题，它强调的是用组合/聚合的方式来共享一些能用的方法。


## UML

![桥接模式](http://img.github.mailjob.net/20210512131801)

## 解释Demo

```php
interface Implementor
{
    public function OperationImp();
}

class ConcreteImplementorA implements Implementor
{
    public function OperationImp()
    {
        echo '具体实现A', PHP_EOL;
    }
}

class ConcreteImplementorB implements Implementor
{
    public function OperationImp()
    {
        echo '具体实现B', PHP_EOL;
    }
}
```

我们先来定义实现接口以及它们具体的实现，也就是真正要执行的功能。就像是适配器模式中的Adaptee。

```php
abstract class Abstraction
{
    protected $imp;
    public function SetImplementor(Implementor $imp)
    {
        $this->imp = $imp;
    }
    abstract public function Operation();
}

class RefinedAbstraction extends Abstraction
{
    public function Operation()
    {
        $this->imp->OperationImp();
    }
}
```

定义抽象类的接口，并维护一个对实现的引用。具体的抽象类的实现方法中，我们直接调用实现接口的真实操作方法。类似于适配器中的Adapter。

```php
$impA = new ConcreteImplementorA();
$impB = new ConcreteImplementorB();

$ra = new RefinedAbstraction();

$ra->SetImplementor($impA);
$ra->Operation();

$ra->SetImplementor($impB);
$ra->Operation();
```

客户端调用，我们的抽象类使用不用的实现类就可以让操作方法变成多态的感觉。

- 在源码解释中，我们会发现，这个模式和适配器模式非常相似。但是，适配器的目的是为了帮助两个不太相关的类，让它们能够协同工作，实现中间转换工作。而桥接则是为了让方法的行为解除继承耦合，方便地添加、修改，动态调用行为，让抽象接口和实现部分可以独立进行改变
- 让抽象接口和实现部分可以独立进行改变的意思是，只要维护了实现接口的引用，我们的实现接口的具体实现类可以是完全不同的类，里面有不同的功能，并且可以任意改变。让实现来自己决定它自己是什么。
- 桥接模式的优点：分享接口及其实现部分、提高可扩充性、实现细节对客户透明
- 桥接模式最主要解决的问题就是继承的不断增长而带来的紧耦合问题
- 组合与聚合：聚合是弱关系，A可以包含B，但B不是A的一部分；组合是强关系，A包含B，B也是A的一部分，整体和部分的关系

## 场景化代码实现

### 场景描述

作为一个高端的汽车品牌，我们可以为客户提供定制化的需求。比如，定制化的颜色，定制化的检测，定制化的引擎 等等。在 **抽象工厂** 设计模式中，我们开发了，针对每个颜色的**车身涂改车间**配备每个对应的**检测车间**。

但是这里有两个问题：1、涂改车间和对应的检测检车的高耦合性问题；2、涂改车间和检测车间的强依赖关系。

在 **桥接模式** 中，我们要做的就是对这个设计模式进行解偶，以便让**涂改车间**和**检测车间**之间**随意组合**。

### 代码实现

首先，我们计划建造3个车身涂改车间，2个检测车间。流程上是车身涂改完成后，可以随意的进入某一个检测车间。

**interface.php**

- 定义车身涂改的接口
- 对于颜色车间：黄色、红色、蓝色，去继承这个接口类，并且实现其中的车身涂改方法

**abstract.php**

- 定义桥接模式的抽象类
- 定义绑定的车身涂改类
- 抽象化检测方法
- 两个检测车间，分别去实现这个检测方法

**bridge.php 测试**

- 将涂改蓝色车身的车间，和2号检测车间，进行组装。测试输出。