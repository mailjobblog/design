<?php
namespace Design\Src\Observer;
use Design\Src\Services\UserParent;

interface ObserverInterface
{
    public function update(UserParent $subject): void;
}