<?php
namespace Design\Src\Proxy;

use Design\Src\Services\SubjectInterface;
use Design\Src\Services\SubjectService;

class Proxy
{
    private $subject;

    public function __construct(){
        $this->subject = new SubjectService();
    }

    public function __call($funName, $arguments) {
        return $this->subject->$funName($arguments);
    }
}