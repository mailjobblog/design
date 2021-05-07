<?php
/**
 * abstract AssemblePart
 *
 * 组装车辆的抽象类
 */
abstract class AssemblePart{
    private $data = [];
    public function setPart($key, $value){
        $this->data[$key] = $value;
    }
}

// Truck(卡车) 继承 AssemblePart 后获得了组装车辆的方法
class Truck extends AssemblePart{
    // TODO：实现主类的方法
}

// Car(农车) 继承 AssemblePart 后获得了组装车辆的方法
class Farm extends AssemblePart{
    // TODO：实现主类的方法
}