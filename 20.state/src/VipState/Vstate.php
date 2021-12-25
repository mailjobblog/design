<?php
namespace Design\Src\VipState;
/**
 * 普通会员
 *
 * 商品折扣为 0.95
 */
class Vstate implements VipStateInterface
{
    const DIS_COUNT = 0.95;

    public function discount($item)
    {
        $score = self::DIS_COUNT * $item->getScore();
        $item->setScore($score);
    }
}