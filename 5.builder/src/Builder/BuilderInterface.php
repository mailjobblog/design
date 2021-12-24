<?php
namespace Design\Src\Builder;

use Design\Src\Part\Part;

interface BuilderInterface
{
    // 返回生产结果
    public function getAssemblePart() : Part;

    // 添加发动机的生产车间
    public function addEngine() : BuilderInterface;

    // 添加轮子的生产车间
    public function addWheel() : BuilderInterface;

    // build
    public function build();
}