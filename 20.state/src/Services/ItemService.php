<?php
namespace Design\Src\Services;

use Design\Src\VipState\VipStateInterface;

class ItemService
{
    private VipStateInterface $vipState;
    private $score;

    // 定义会员等级
    public function setState(VipStateInterface $vipState) {
        $this->vipState = $vipState;
    }

    // 计算折扣
    // 根据不同的会员等级 计算不同的会员优惠价格
    public function discount() {
        return $this->vipState->discount($this);
    }

    // 设置折扣
    public function setScore(float $score) {
        $this->score = $score;
    }

    // 获取折扣
    public function getScore() {
        return $this->score;
    }



}