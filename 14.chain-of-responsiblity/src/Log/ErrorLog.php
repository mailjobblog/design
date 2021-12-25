<?php
namespace Design\Src\Log;

class ErrorLog extends HandlerAbstract
{
    // 传入处理器类对象 $successor
    public function __construct(HandlerAbstract $successor = null)
    {
        parent::__construct($successor);
    }

    // 处理本类中的业务
    protected function processing(...$args)
    {
        echo "Error 日志写入成功" . PHP_EOL;
        return true;
    }
}