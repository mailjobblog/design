<?php
namespace Design\Src\Product;

use Design\Src\Part\PartAbstract;

class EngineProduct extends PartAbstract {

    public function make()
    {
        return "发送机引擎生产完成";
    }

}