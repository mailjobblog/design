<?php
namespace Design\Src\Log;

class ConsuleLog extends HandlerAbstract
{
    // 传入处理器类对象 $successor
    public function __construct(HandlerAbstract $successor = null)
    {
        parent::__construct($successor);
    }

    // 处理本类中的业务
    protected function processing(...$args)
    {
        echo "此日志仅作为展示使用，不作任何处理" . PHP_EOL;
        return true;
    }
}