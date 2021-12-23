<?php
namespace Design\Src;

/**
 * Class FactoryClass
 */
class FactoryClass
{
    /**
     * 实现汽车上色
     */
    public static function createProduction(string $color) {
        switch ($color)
        {
            case 'violet':
                return new ProductViolet();
            case 'yellow':
                return new ProductYellow();
            case 'green':
                return new ProductGreen();
        }
    }
}