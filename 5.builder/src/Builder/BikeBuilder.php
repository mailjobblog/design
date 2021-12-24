<?php
namespace Design\Src\Builder;
use Design\Src\Part\Part;

/**
 * 自行车建造者
 */
class BikeBuilder implements BuilderInterface{

    private Part $product;

    // 初始化
    // 创建生产对象
    public function __construct() {
        $this->product = new Part();
        return $this;
    }

    // 返回生产对象
    public function getAssemblePart() : Part {
        return $this->product;
    }

    // 创建生产轮子的具体实现类
    public function addWheel() : BuilderInterface {
        // TODO: 实现 wheel 方法
        $this->product->setPart('wheel', "两个轮子");
        return $this;
    }

    // 创建生产发动机的具体实现类
    public function addEngine() : BuilderInterface{
        // TODO: 实现 engine 方法
        $this->product->setPart('engine', "无");
        return $this;
    }

    // build
    public function build() {
        return $this->product->buildShow($this);
    }
}