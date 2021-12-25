<?php
namespace Design\Src\VipState;
/**
 * Vip会员
 *
 * 商品折扣为 0.8
 */
class VipState implements VipStateInterface
{
    const DIS_COUNT = 0.8;

    public function discount($item)
    {
        $score = self::DIS_COUNT * $item->getScore();
        $item->setScore($score);
    }
}