<?php
namespace Design\Src\Car;
use Design\Src\Engine\BentleyEngine;

class BentleyCar extends CarAbstract
{
    public function __clone(){
        $this->category = new BentleyEngine();
    }

    public function setChair(string $chair) : void {
        $this->chair = "BentleyCar:".$chair;
    }

    public function getChair() : string {
        return $this->chair;
    }
}