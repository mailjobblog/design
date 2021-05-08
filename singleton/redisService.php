<?php
/**
 * Redis 连接类
 *
 * 单例模式
 */
class redisService {

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

            self::$instance = 'test'; // 测试使用
        }
        return self::$instance;
    }
}

// 测试
var_dump(redisService::getInstance('127.0.0.1','6379'));

// 返回
// string(4) "test"
