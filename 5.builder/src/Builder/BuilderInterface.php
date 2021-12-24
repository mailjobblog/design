<?php
namespace Design\Src\Builder;

use Design\Src\Part\PartAbstract;

interface BuilderInterface
{
    // 返回生产结果
    public function getAssemblePart() : PartAbstract;

    // 添加发动机的生产车间
    public function addEngine();

    // 添加轮子的生产车间
    public function addWheel();
}