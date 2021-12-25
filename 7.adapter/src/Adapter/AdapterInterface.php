<?php
namespace Design\Src\Adapter;

interface  AdapterInterface{

    // 车身涂改 - 适配
    public function make_color() : string;

    // 汽车安检 - 适配
    public function quality() : string;
}
