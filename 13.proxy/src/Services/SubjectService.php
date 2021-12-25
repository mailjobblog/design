<?php
namespace Design\Src\Services;
use Design\Src\Services\SubjectInterface;

class SubjectService implements SubjectInterface
{
    public function request(...$args)
    {
        return "request function run success";
    }

    /**
     * @throws \Exception
     */
    public function __call($funName, $arguments)
    {
        throw new \Exception("Not found function");
    }
}