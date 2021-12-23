<?php
namespace Design\Src\Factory;
use Design\Src\Product\QualityYellow;

class YellowClass extends FactoryAbstract
{
    protected function factoryMethod() : QualityYellow
    {
        return new QualityYellow();
    }
}