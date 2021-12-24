<?php
namespace Design\Src\Builder;
use Design\Src\Part\Part;

/**
 * 汽车建造者
 */
class CarBuilder implements BuilderInterface{

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
    public function addWheel() : BuilderInterface{
        // TODO: 实现 wheel 方法
        $this->product->setPart('wheel', "四个大轱辘");
        return $this;
    }

    // 创建生产发动机的具体实现类
    public function addEngine() : BuilderInterface {
        // TODO: 实现 engine 方法
        $this->product->setPart('engine', "丰田V16超级发动机");
        return $this;
    }

    // build
    public function build() {
        return $this->product->buildShow($this);
    }
}