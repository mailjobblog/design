<?php
namespace Design\Src;

class RedisService {

    private static $instance;

    /**
     * 私有化构造函数
     * 原因：防止外界调用构造新的对象
     */
    private function __construct(){}

    /**
     * 获取redis连接的唯一出口
     */
    public static function getInstance($host, $port, $auth = null) {
        if(!self::$instance) {
            // $redis = new \Redis();
            // $redis->connect($host, $port);
            // $redis->auth($auth);
            // self::$instance = $redis;

            self::$instance = self; // 测试使用
        }
        return self::$instance;
    }

    public function get() {
        return "get 查询成功";
    }
}