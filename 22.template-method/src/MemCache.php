<?php
namespace Design\Src;

class MemCache extends CacheAbstract
{
    // 模拟 memcache 连接
    public function connect($host, $port, $auth = null): void
    {
        $this->server = $host.":".$port;
    }
}