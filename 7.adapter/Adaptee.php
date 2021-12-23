<?php
/**
 * 目标实现类
 */
interface ProductInterface{
    // 车身涂改
    public function make_color() : string;

    // 汽车安检
    public function quality() : string;
}

class YellowClassAdaptee implements ProductInterface {
    public function make_color(): string {
        return "this car color is Yellow";
    }

    public function quality(): string {
        return "this car ok";
    }
}

class RedClassAdaptee implements ProductInterface {
    public function make_color(): string {
        return "this car color is Red";
    }

    public function quality(): string {
        return "this red car ok";
    }
}