<?php
namespace Design\Src\Comparator;

class IdComparator implements ComparatorInterface
{
    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @return int
     *
     * PHP7+ 支持组合比较符（combined comparison operator）也称之为太空船操作符，符号为 <=>
     * 如果 $a > $b, 则 $c 的值为 1。
     * 如果 $a == $b, 则 $c 的值为 0。
     * 如果 $a < $b, 则 $c 的值为 -1。
     */
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }

}