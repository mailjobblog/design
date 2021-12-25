<?php
namespace Design\Src;

class WorkshopLine extends PositionAbstract
{
    public function add(PositionAbstract $position) : Void {
        echo "不能添加下级";
    }

    public function remove(PositionAbstract $position) {
        echo "不能删除下级";
    }

    public function message() {
        echo "开始发送WorkshopLine角色：" . $this->name . "下的所有用户短信\n";
    }
}