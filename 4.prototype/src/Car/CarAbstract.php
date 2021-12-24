<?php
namespace Design\Src\Car;
use Design\Src\Engine\EngineInterface;

abstract class CarAbstract{

    // 实现原型的对象
    public EngineInterface $category;

    // 设置座椅材质
    protected string $chair;

    // 克隆方法
    abstract public function __clone();

}