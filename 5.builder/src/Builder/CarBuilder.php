<?php
namespace Design\Src\Builder;
use Design\Src\Part\Part;
use Design\Src\Part\PartAbstract;
use Design\Src\Product\WheelProduct;
use Design\Src\Product\EngineProduct;

/**
 * 汽车建造者
 */
class CarBuilder implements BuilderInterface{

    private PartAbstract $product;

    // 初始化
    // 创建生产对象
    public function __construct() {
        $this->product = new Part();
    }

    // 返回生产对象
    public function getAssemblePart() : PartAbstract {
        return $this->product;
    }

    // 创建生产轮子的具体实现类
    public function addWheel() {
        $this->product->setPart('wheel', new WheelProduct());
    }

    // 创建生产发动机的具体实现类
    public function addEngine() {
        $this->product->setPart('engine', new EngineProduct());
    }
}