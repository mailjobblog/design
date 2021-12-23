<?php
/**
 * 接口类 车身涂改车间
 *
 * 黄色车间
 * 红色车间
 * 蓝色车间
 */
interface ColorInterface{
    public function make_color() : string;
}

class Yellow implements ColorInterface{
    public function make_color(): string {
        return "this car color is Yellow。";
    }
}

class Red implements ColorInterface{
    public function make_color(): string {
        return "this car color is Red。";
    }
}

class Blue implements ColorInterface{
    public function make_color(): string {
        return "this car color is Blue。";
    }
}


