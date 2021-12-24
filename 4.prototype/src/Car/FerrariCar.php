<?php
namespace Design\Src\Car;
use Design\Src\Engine\FerrariEngine;

class FerrariCar extends CarAbstract
{
    public function __clone(){
        $this->category = new FerrariEngine();
    }

    public function setChair(string $chair) : void {
        $this->chair = "FerrariCar:".$chair;
    }

    public function getChair() : string {
        return $this->chair;
    }
}