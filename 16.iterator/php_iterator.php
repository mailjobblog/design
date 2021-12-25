<?php

class TestIterator implements \Iterator {
    private $items;
    function __construct($items) {
        $this->items = $items;
    }
    // 返回当前元素
    public function current() {
        return current($this->items);
    }
    // 返回当前元素的键
    public function key() {
        return key($this->items);
    }
    // 向前移动到下一个元素
    public function next() {
        return next($this->items);
    }
    // 返回到迭代器的第一个元素
    public function rewind() {
        reset($this->items);
    }
    // 检查当前位置是否有效
    public function valid() {
        return($this->current()!==false);
    }
}
$items = new TestIterator(['id'=>'1','name'=>'2']);
foreach($items as $key=>$item) {
    echo $key,'=>',$item,"\n";
}