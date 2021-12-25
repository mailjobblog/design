<?php
require "vendor/autoload.php";
use Design\Src\Iterator\IteratorBook;

$iteratorBook = new IteratorBook(["a","b","c"]);

while (!$iteratorBook->IsDone()) {
    // 获取当前元素
    echo $iteratorBook->CurrentItem(), PHP_EOL;

    // 游标移动到下一个
    $iteratorBook->Next();
}