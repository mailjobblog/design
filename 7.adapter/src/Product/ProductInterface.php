<?php
namespace Design\Src\Product;

interface ProductInterface{

    // 车身涂改
    public function make_color() : string;

    // 汽车安检
    public function quality() : string;
}
