<?php
namespace Design\Src\Services;

class LogService implements ServiceInterface
{
    public function create()
    {
        echo "log create" . PHP_EOL;
    }

    public function select()
    {
        echo "log select" . PHP_EOL;
    }

    public function update()
    {
        echo "log update" . PHP_EOL;
    }

    public function delete()
    {
        echo "log delete" . PHP_EOL;
    }
}