<?php
namespace Design\Src;

abstract class PositionAbstract
{
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
    abstract public function add(PositionAbstract $position);

    // 移除节点
    abstract public function remove(PositionAbstract $position);

    // 节点通知
    abstract public function message();
}