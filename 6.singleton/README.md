# 单例模式

## 前言

在应用程序调用的时候，只能获得一个对象实例。

Laravel中在IoC容器部分使用了单例模式。关于容器部分的内容我们会在将来的Laravel系列文章中讲解。我们可以`Illuminate\Container\Container`类中找到`singleton`方法。它调用了`bind`方法中的`getClosure`方法。继续追踪会发现他们最终会调用`Container`的`make`或`build`方法来进行实例化类，不管是`make`还是`build`方法，他们都会有单例的判断，也就是判断类是否被实例化过或者在容器中已存在。`build`中的`if (!$reflector->isInstantiable())`。

## 参考文献

> 代码下载：https://github.com/mailjobblog/design/tree/master/singleton

## UML

![image-20210508171702336](http://img.github.mailjob.net/20210508171703.png)

## 解释Demo

```php
class Singleton
{
    private static $uniqueInstance;
    private $singletonData = '单例类内部数据';

    private function __construct()
    {
        // 构造方法私有化，外部不能直接实例化这个类
    }

    public static function GetInstance()
    {
        if (self::$uniqueInstance == null) {
            self::$uniqueInstance = new Singleton();
        }
        return self::$uniqueInstance;
    }

    public function SingletonOperation(){
        $this->singletonData = '修改单例类内部数据';
    }

    public function GetSigletonData()
    {
        return $this->singletonData;
    }
}
```

核心就是这样一个单例类，没别的了。让静态变量保存实例化后的自己。当需要这个对象的时候，调用`GetInstance()`方法获得全局唯一的一个对象。

```php
$singletonA = Singleton::GetInstance();
echo $singletonA->GetSigletonData(), PHP_EOL;

$singletonB = Singleton::GetInstance();

if ($singletonA === $singletonB) {
    echo '相同的对象', PHP_EOL;
}
$singletonA->SingletonOperation(); // 这里修改的是A
echo $singletonB->GetSigletonData(), PHP_EOL;
```

### 单例模式的优势

有些类的创建开销很大，而且并不需要我们每次都使用新的对象，完全可以一个对象进行复用，它们并没有需要变化的属性或状态，只是提供一些公共服务。比如数据库操作类、网络请求类、日志操作类、配置管理服务等等

对唯一实例的受控访问；缩小命名空间；允许对操作和表示的精化；允许可变数目的实例；比类操作更灵活。

### 单例在PHP中到底是不是唯一的？

如果在一个进程下，也就是一个fpm下，当然是唯一的。nginx同步拉起的多个fpm中那肯定就不是唯一的啦。一个进程一个嘛！

## 场景化演示

### 场景描述

在项目开发中，对于redis连接类文件，每次 set 或者 get 都重新实例化 redis 连接类，显然很不好。所以在项目开发中，我们可以针对于 redis 的连接的实例化对象，做一个单例模式，吧实例化的结果，持续的放入到内存中，方便每次的调用。

### 代码实现

```php
<?php
/**
 * Redis 连接类
 *
 * 单例模式
 */
class redisService {

    private static $instance;

    /**
     * 私有化构造函数
     * 原因：防止外界调用构造新的对象
     */
    private function __construct(){}

    /**
     * 获取redis连接的唯一出口
     */
    public static function getInstance($host, $port, $auth = null) {
        if(!self::$instance) {
            // $redis = new \Redis();
            // $redis->connect($host, $port);
            // $redis->auth($auth);
            // self::$instance = $redis;

            self::$instance = 'test'; // 测试使用
        }
        return self::$instance;
    }
}

// 测试
var_dump(redisService::getInstance('127.0.0.1','6379'));

// 返回
// string(4) "test"
```

