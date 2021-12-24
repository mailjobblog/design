<?php
namespace Design\Src\Engine;

class BentleyEngine implements EngineInterface
{
    private $engine;

    public function setEngine(string $engine) : void {
        $this->engine = "奔驰发动机：".$engine;
    }

    public function getEngine(): string {
        return $this->engine;
    }
}