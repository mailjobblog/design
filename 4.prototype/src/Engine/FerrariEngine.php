<?php
namespace Design\Src\Engine;

class FerrariEngine implements EngineInterface
{
    private $engine;

    public function setEngine(string $engine) : void {
        $this->engine = "法拉利的发动机生产车间：".$engine;
    }

    public function getEngine(): string {
        return $this->engine;
    }
}