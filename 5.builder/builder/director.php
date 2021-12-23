<?php
require_once 'builder.php';

/*
* Director 是构建器模式的一部分。
ß*
* 它知道建设者的界面在构建器的帮助下构建一个复杂的对象
* 您还可以注入许多构建器而不是一个来构建更复杂的对象。
*/
class Director
{
    public function build(BuilderInterface $builder): AssemblePart
    {
        $builder->createAssemblePart();

        $builder->addDoor();
        $builder->addEngine();
        $builder->addTyre();

        return $builder->getAssemblePart();
    }
}