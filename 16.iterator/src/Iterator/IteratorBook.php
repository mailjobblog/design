<?php
namespace Design\Src\Iterator;

class IteratorBook implements TestIterator
{
    private $list;
    private $index;
    public function __construct($list)
    {
        $this->list = $list;
        $this->index = 0;
    }
    public function First()
    {
        $this->index = 0;
    }

    public function Next()
    {
        $this->index++;
    }

    public function IsDone()
    {
        return $this->index >= count($this->list);
    }

    public function CurrentItem()
    {
        return $this->list[$this->index];
    }
}