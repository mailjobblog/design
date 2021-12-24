<?php
namespace Design\Src\Director;

use Design\Src\Builder\BuilderInterface;
use Design\Src\Part\PartAbstract;

/*
* Director 是构建器模式的一部分。
*
* 它知道建设者的界面在构建器的帮助下构建一个复杂的对象
* 您还可以注入许多构建器而不是一个来构建更复杂的对象。
*/
class Director
{
    public function build(BuilderInterface $builder)
    {
        $builder->addWheel();
        $builder->addEngine();
    }
}