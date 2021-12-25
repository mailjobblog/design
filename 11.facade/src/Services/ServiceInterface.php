<?php
namespace Design\Src\Services;

interface ServiceInterface
{
    public function create();

    public function select();

    public function update();

    public function delete();
}