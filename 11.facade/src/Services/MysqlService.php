<?php
namespace Design\Src\Services;

class MysqlService implements ServiceInterface
{
    public function create()
    {
        echo "Databases Mysql create" . PHP_EOL;
    }

    public function select()
    {
        echo "Databases Mysql select" . PHP_EOL;
    }

    public function update()
    {
        echo "Databases Mysql update" . PHP_EOL;
    }

    public function delete()
    {
        echo "Databases Mysql delete" . PHP_EOL;
    }
}