<?php
namespace Design\Src\Part;
/**
 * abstract AssemblePart
 *
 * 组装车辆的抽象类
 */

class DoorProduct{}

class EngineProduct{}

abstract class PartAbstract{

    /**
     * @var object[]
     */
    protected $data = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, $value){
        $this->data[$key] = $value;
    }

}