<?php
namespace Design\Src;
/**
 * 定义一个操作中的算法骨架,而将一些步骤延迟到子类中,
 * 使得子类可以不改变一个算法的结构可以定义该算法的某些特定步骤
 *
 * 在抽象父类中定义一个模板方法的方法，通过子类的覆盖使得相同算法框架可以有不同的执行结果
 */
abstract class CacheAbstract
{
    protected $server;

    private $data = [];

    // 模拟继承类比较要实现的连接方法
    abstract public function connect($host, $port, $auth = null) : void;

    // 模拟公共方法
    public function set($key, $value) {
        $this->data[$key] = $value;
    }

    // 模拟公共方法
    public function get($key) {
        return $this->data[$key] ?? null;
    }
}