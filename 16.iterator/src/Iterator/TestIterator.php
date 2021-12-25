<?php
namespace Design\Src\Iterator;

interface TestIterator
{
    public function First();
    public function Next();
    public function IsDone();
    public function CurrentItem();
}