<?php
namespace Design\Src\Services;
use Design\Src\Observer\ObserverInterface;

/**
 * UserParent 实现观察者模式 (称为主体)，它维护一个观察者列表
 */
class UserParent
{
    // 观察者对象列表
    private $observers = [];

    // 绑定观察者
    public function attach(ObserverInterface $observer): void
    {
        array_push($this->observers, $observer);
    }

    // 解绑观察者
    public function detach(ObserverInterface $observer): void
    {
        $position = 0;
        foreach ($this->observers as $ob) {
            if ($ob == $observer) {
                array_splice($this->observers, ($position), 1);
            }
            ++$position;
        }
    }

    // 通知观察者
    public function notify(): void
    {
        foreach ($this->observers as $ob) {
            $ob->update($this);
        }
    }
}