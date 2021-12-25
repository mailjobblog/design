<?php
namespace Design\Src;

class Workshop extends PositionAbstract
{
    public function add(PositionAbstract $position) {
        $this->item[] = $position;
    }

    public function remove(PositionAbstract $position) {
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