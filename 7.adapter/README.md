# 适配器模式

## 前言

将一个类的接口转换成可应用的兼容接口。适配器使原本由于接口不兼容而不能一起工作的那些类可以一起工作。
**案例**

- 客户端数据库适配器
- 使用多个不同的网络服务和适配器来规范数据使得出结果是相同的


## UML

### 继承式

![适配器方法结构类图-继承式](http://img.github.mailjob.net/20210511095055)

### 组合式

![适配器方法结构类图-组合式](http://img.github.mailjob.net/20210511095111)

## 解释Demo

### 组合式

```php
interface Target{
    function Request() : void;
}
```

定义一个接口契约，也可以是一个正常的有实现方法的类（后面的例子我们会用类）

```php
class Adapter implements Target{
    private $adaptee;

    function __constuct($adaptee){
        $this->adaptee = $adaptee;
    }

    function Request() : void {
        $this->adaptee->SpecificRequest();
    }
}
```

适配器实现这个接口契约，让Request()方法得以实现，但请注意，我们真正调用的其实是Adaptee类中的方法

```php
class Adaptee {
    function SpecificRequest() : void{
        echo "I'm China Standard！";
    }
}
```

- 适配器有两种形式，上方类图中给出了，我们代码实现的组合形式的

## 场景化代码实现

### 场景描述

继续说车身涂改颜色的案例，每个车身颜色的涂改，都是由总公司的分配给每个车间完成的。但是这里每个车间的工作模式不同，所以这里就引申出来了一个 **兼容性** 问题。但是对于每个车间的管理，我们又不可以对于每个车间都制定一套管理规范。所以，我们需要想一个办法，去兼容每个车间，这样好去统一的管理每个车间。

