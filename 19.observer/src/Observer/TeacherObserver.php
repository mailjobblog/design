<?php
namespace Design\Src\Observer;
use Design\Src\Services\UserParent;
/**
 * 观察者类
 */
class TeacherObserver implements ObserverInterface
{
    private $observerState = '';
    function update(UserParent $subject): void
    {
        $this->observerState = $subject->getState();
        echo '执行观察者操作！当前状态：' . $this->observerState;
    }
}