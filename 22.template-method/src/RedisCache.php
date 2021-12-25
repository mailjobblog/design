<?php
namespace Design\Src;

class RedisCache extends CacheAbstract
{
    // 模拟 redis 连接
    public function connect($host, $port, $auth = null): void
    {
        $this->server = $host.":".$port.":".$auth;
    }
}