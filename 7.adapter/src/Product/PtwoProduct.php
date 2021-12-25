<?php
namespace Design\Src\Product;

class PtwoProduct implements ProductInterface
{
    public function make_color(): string {
        return "this car color is Bue";
    }

    public function quality(): string {
        return "this car no no no ok";
    }
}