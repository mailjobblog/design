<?php
namespace Design\Src\Services;

class User extends UserParent
{
    // 状态记录
    private $stateNow = '';

    // 触发观察者的执行
    public function setState($state)
    {
        $this->stateNow = $state;
        $this->notify();
    }

    public function getState()
    {
        return $this->stateNow;
    }
}