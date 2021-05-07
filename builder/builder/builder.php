<?php
require_once 'product/makeProduct.php';
require_once 'product/product.php';

/**
 * Interface BuilderInterface
 *
 * 建造者类的接口类
 */
interface BuilderInterface {
    // 创建生产对象
    public function createAssemblePart();

    // 添加发动机
    public function addEngine();

    // 添加车门
    public function addDoor();

    // 添加轮胎
    public function addTyre();

    // 返回
    public function getAssemblePart() : AssemblePart;
}

/**
 * 农车 建造者类
 */
class TruckBuilder implements BuilderInterface{

    private $truck;

    public function __construct() {
        $this->createAssemblePart();
    }

    public function createAssemblePart() {
        $this->truck = new Truck(); // 实例化卡车类
    }

    // 两扇门
    public function addDoor() {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    // 卡车六缸发动机
    public function addEngine() {
        $this->truck->setPart('truckEngine', new Engine());
    }

    // 六个轮子
    public function addTyre() {
        $this->truck->setPart('tyre1', new Tyre());
        $this->truck->setPart('tyre2', new Tyre());
        $this->truck->setPart('tyre3', new Tyre());
        $this->truck->setPart('tyre4', new Tyre());
        $this->truck->setPart('tyre5', new Tyre());
        $this->truck->setPart('tyre6', new Tyre());
    }

    public function getAssemblePart() : AssemblePart {
        return $this->truck;
    }
}

/**
 * 农车 建造者类
 */
class FarmBuilder implements BuilderInterface{

    private $farm;

    public function __construct() {
        $this->createAssemblePart();
    }

    public function createAssemblePart() {
        $this->farm = new Farm(); // 实例化农车类
    }

    // 一扇门
    public function addDoor() {
        $this->farm->setPart('leftDoor', new Door());
    }

    // 三缸发动机
    public function addEngine() {
        $this->farm->setPart('farmEngine', new Engine());
    }

    // 三个轮子
    public function addTyre() {
        $this->farm->setPart('tyre1', new Tyre());
        $this->farm->setPart('tyre2', new Tyre());
        $this->farm->setPart('tyre3', new Tyre());
    }

    public function getAssemblePart() : AssemblePart {
        return $this->farm;
    }
}