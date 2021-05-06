<?php
interface EngineProvicer{
    public function getEngine() : String;
}

class Bentley implements EngineProvicer {
    public $engine;
    public function getEngine(): string
    {
        return "宾利-发动机引擎：".$this->engine;
    }
}

class Ferrari implements EngineProvicer {
    public $engine;
    public function getEngine(): string
    {
        return "法拉利-发动机引擎：".$this->engine;
    }
}