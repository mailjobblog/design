<?php
namespace Design\Src;

use Design\Src\Services\LogService;
use Design\Src\Services\MysqlService;
use Design\Src\Services\RedisService;
use Design\Src\Services\ServiceInterface;

class Facade
{
    private ServiceInterface $mysql;

    private ServiceInterface $redis;

    private ServiceInterface $log;

    public function __construct() {
        $this->mysql = new MysqlService();
        $this->redis = new RedisService();
        $this->log = new LogService();
    }

    public function create()
    {
        $this->mysql->create();
        $this->redis->create();
    }

    public function select()
    {
        $this->redis->select();
    }

    public function delete()
    {
        $this->mysql->delete();
        $this->redis->delete();
        $this->log->delete();
    }

}