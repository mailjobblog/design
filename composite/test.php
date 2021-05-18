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