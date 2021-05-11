<?php
/**
 * 适配器类
 */
interface AdapterInterface{
    // 车身涂改 - 适配
    public function make_color() : string;

    // 汽车安检 - 适配
    public function quality() : string;
}

class Adapter implements AdapterInterface{
    private $adaptee;

    function __construct($adaptee) {
        $this->adaptee = $adaptee;
    }

    public function make_color(): string {
        return $this->adaptee->make_color();
    }

    public function quality(): string {
        return $this->adaptee->quality();
    }
}