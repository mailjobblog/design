<?php
namespace Design\Src\Context;

use Design\Src\Comparator\ComparatorInterface;

class Context
{
    /**
     * @var ComparatorInterface
     */
    private $comparator;

    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements) : array
    {
        // 调用 $this->comparator 的 compare 方法
        // uasort 使用用户自定义的比较函数对数组 $arr 中的元素按键值进行排序
        uasort($elements, [$this->comparator, 'compare']);
        return $elements;
    }
}