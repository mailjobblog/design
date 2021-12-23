<?php
namespace Design\Src\Factory;
/**
 * 定义工厂方法的抽象类
 */
abstract class FactoryAbstract
{
    abstract protected function factoryMethod();

    public function getObject(){
        return $this->factoryMethod();
    }
}