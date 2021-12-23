# 组合模式


## 前言

**一组对象与该对象的单个实例的处理方式一致。**简单对象和复合对象必须实现相同的接口。这就是组合模式能够将组合对象和简单对象进行一致处理的原因。

- 组合部件（Component）：它是一个抽象角色，为要组合的对象提供统一的接口。
- 叶子（Leaf）：在组合中表示子节点对象，叶子节点不能有子节点。
- 合成部件（Composite）：定义有枝节点的行为，用来存储部件，实现在Component接口中的有关操作，如增加（Add）和删除（Remove）。


## UML

![组合模式](http://img.github.mailjob.net/20210518165607)

## 解释Demo

```php
abstract class Component
{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }
    
    abstract public function Operation(int $depth);

    abstract public function Add(Component $component);

    abstract public function Remove(Component $component);
}
```

抽象出来的组合节点声明，在适当情况下实现所有类的公共接口的缺省行为，是所有子节点的父类。

```php
class Composite extends Component
{
    private $componentList;

    public function Operation($depth)
    {
        echo str_repeat('-', $depth) . $this->name . PHP_EOL;
        foreach ($this->componentList as $component) {
            $component->Operation($depth + 2);
        }
    }

    public function Add(Component $component)
    {
        $this->componentList[] = $component;
    }

    public function Remove(Component $component)
    {
        $position = 0;
        foreach ($this->componentList as $child) {
            ++$position;
            if ($child == $component) {
                array_splice($this->componentList, ($position), 1);
            }
        }
    }

    public function GetChild(int $i)
    {
        return $this->componentList[$i];
    }
}
```

具体的节点实现类，保存下级节点的引用，定义实际的节点行为。

```php
class Leaf extends Component
{
    public function Add(Component $c)
    {
        echo 'Cannot add to a leaf' . PHP_EOL;
    }
    public function Remove(Component $c)
    {
        echo 'Cannot remove from a leaf' . PHP_EOL;
    }
    public function Operation(int $depth)
    {
        echo str_repeat('-', $depth) . $this->name . PHP_EOL;
    }
}
```

叶子节点，没有子节点的最终节点。

> 从来代码来看，完全就是一颗树的实现
>
> 所有的子节点和叶子节点都可以处理数据，但叶子节点为终点
>
> 你希望用户可以忽略组合对象与单个对象的不同，统一地使用组合结构中的所有对象时，就应该考虑使用组合模式
>
> 用户不用关心到底是处理一个叶节点还是处理一个组合组件 ，也就用不着为定义组合而写一些选择判断语句了
>
> 组合模式可以让客户一致性地使用组合结构和单个对象

## 场景化代码演示

### 场景描述

讲一个层级关系的案例：在汽车的生产车间下，就有多条生产线（轮胎生产线，车窗生产线，引擎生产线 ）。也就是说一个生产车间下可以分出多个生产线，这就是一个子属的关系。

案例描述是这样的，在一个总的生产车间下，有两个产品线。我们需要在不同的需求下，对不同层级下的用户进行消息通知。例如在总车间下进行消息通知，那么各个产品线下的用户都会收到通知。如果在某一个产品线下进行消息通知，那么只有该产品线下的用户会收到通知。

![短信发送组合模式版](http://img.github.mailjob.net/20210518165911)

### 代码实现

```php
<?php

abstract class Position{

    // 节点名称
    protected $name;

    // 层级关系
    protected $item;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    // 增加节点
    abstract public function add(Position $position);

    // 移除节点
    abstract public function remove(Position $position);

    // 节点通知
    abstract public function message();
}

/**
 * 总生产车间
 */
class Workshop extends Position{

    public function add(Position $position) {
        $this->item[] = $position;
    }

    public function remove(Position $position) {
        $p = 0;
        foreach ($this->item as $n) {
            ++$p;
            if ($n == $position) {
                array_splice($this->item, ($p), 1);
            }
        }
    }

    public function message() {
        echo "开始发送Workshop角色：" . $this->name . "下的所有用户短信\n";
        foreach ($this->item as $position) {
            $position->message();
        }
    }
}

/**
 * 产品线
 */
class WorkshopLine extends Position{

    public function add(Position $position) : Void {
        echo "不能添加下级";
    }

    public function remove(Position $position) {
        echo "不能删除下级";
    }

    public function message() {
        echo "开始发送WorkshopLine角色：" . $this->name . "下的所有用户短信\n";
    }
}
```



```php
// 简单组合测试
$workshop = new Workshop('总生产车间');
$workshop->add(new WorkshopLine('车轮胎产品线'));
$workshop->message();

// 输出
/*
开始发送Workshop角色：总生产车间下的所有用户短信
开始发送WorkshopLine角色：车轮胎产品线下的所有用户短信
 */

// 多级组合测试
$work = new Workshop('总生产车间');

$one = new Workshop('1号轮胎车间');
$one->add(new WorkshopLine('1号-生产轮胎的钢圈'));
$one->add(new WorkshopLine('1号-生产轮胎的钢圈'));

$two = new Workshop('2号车窗车间');
$two->add(new WorkshopLine('2号-生产玻璃的有机材料'));
$two->add(new WorkshopLine('2号-生产玻璃的密封条'));

$work->add($one);
$work->add($two);
$work->message();

/*
开始发送Workshop角色：总生产车间下的所有用户短信
开始发送Workshop角色：1号轮胎车间下的所有用户短信
开始发送WorkshopLine角色：1号-生产轮胎的钢圈下的所有用户短信
开始发送WorkshopLine角色：1号-生产轮胎的钢圈下的所有用户短信
开始发送Workshop角色：2号车窗车间下的所有用户短信
开始发送WorkshopLine角色：2号-生产玻璃的有机材料下的所有用户短信
开始发送WorkshopLine角色：2号-生产玻璃的密封条下的所有用户短信
 */
```

