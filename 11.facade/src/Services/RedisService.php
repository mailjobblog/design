<?php
namespace Design\Src\Services;

class RedisService implements ServiceInterface
{
    public function create()
    {
        echo "Redis Cache create" . PHP_EOL;
    }

    public function select()
    {
        echo "Redis Cache select" . PHP_EOL;
    }

    public function update()
    {
        echo "Redis Cache update" . PHP_EOL;
    }

    public function delete()
    {
        echo "Redis Cache delete" . PHP_EOL;
    }
}