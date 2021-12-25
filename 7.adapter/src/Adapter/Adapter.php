<?php
namespace Design\Src\Adapter;

use Design\Src\Product\ProductInterface;

class Adapter implements AdapterInterface
{
    private $adapterProduct;

    function __construct(ProductInterface $adapter) {
        $this->adapterProduct = $adapter;
    }

    public function make_color(): string {
        // TODO 对于目标类的返回进行适配性处理
        return $this->adapterProduct->make_color()."i am Adapter";
    }

    public function quality(): string {
        return $this->adapterProduct->quality();
    }
}