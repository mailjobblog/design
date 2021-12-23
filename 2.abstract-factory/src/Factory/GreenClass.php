<?php
namespace Design\Src\Factory;
use Design\Src\Product\QualityGreen;

class GreenClass extends FactoryAbstract
{
    protected function factoryMethod() : QualityGreen
    {
        return new QualityGreen();
    }
}