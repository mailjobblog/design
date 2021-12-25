<?php
namespace Design\Src\VipState;
/**
 * 超级会员
 *
 * 商品折扣为 0.5
 */
class SvipState implements VipStateInterface
{
    const DIS_COUNT = 0.5;

    // 计算折扣后的价格
    public function discount($item)
    {
        $score = self::DIS_COUNT * $item->getScore();
        $item->setScore($score);
    }
}