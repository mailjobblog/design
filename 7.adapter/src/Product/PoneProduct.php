<?php
namespace Design\Src\Product;

class PoneProduct implements ProductInterface
{
    public function make_color(): string {
        return "this car color is Yellow";
    }

    public function quality(): string {
        return "this car ok";
    }
}