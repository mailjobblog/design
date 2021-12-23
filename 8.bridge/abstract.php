<?php
/**
 * 桥接模式 - 抽象类
 *
 * 1号车间
 * 2号车间
 */
abstract class Service{
    protected $colorService;
    public function setColorService($color) : void {
        $this->colorService = $color;
    }
    abstract public function quality();
}

class Quality1 extends Service {
    public function quality() {
        echo $this->colorService->make_color();
        echo "The Cart Very OK";
    }
}

class Quality2 extends Service {
    public function quality() {
        echo $this->colorService->make_color();
        echo "The Cart Very OK";
    }
}
