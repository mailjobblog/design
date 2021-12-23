<?php
namespace Design\Src\Factory;
use Design\Src\Product\QualityViolet;

class VioletClass extends FactoryAbstract
{
    protected function factoryMethod() : QualityViolet
    {
        return new QualityViolet();
    }
}