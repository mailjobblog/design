<?php
namespace Design\Src\Factory;
use Design\Src\ProductInterface;
use Design\Src\Quality\QualityInterface;

/**
 * 定义工厂方法的接口类
 */
interface FactoryInterface
{
    // 生产车间
    public function product() : ProductInterface;

    // 质检车间
    public function quality() : QualityInterface;
}