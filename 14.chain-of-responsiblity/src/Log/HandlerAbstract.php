<?php
namespace Design\Src\Log;

abstract class HandlerAbstract
{
    /**
     * @var HandlerAbstract|null
     * 定义继承处理器
     */
    private ?HandlerAbstract $successor = null;

    /**
     * 输入集成处理器对象。
     */
    public function __construct(HandlerAbstract $handler = null)
    {
        $this->successor = $handler;
    }

    /**
     * 通过使用模板方法模式这种方法可以确保每个子类不会忽略调用继承
     *
     * 定义处理请求方法
     *
     * @return string|null
     */
    final public function handle(...$args)
    {
        $processed = $this->processing($args);

        if ($processed == true) {
            // 请求尚未被目前的处理器处理 => 传递到下一个处理器。
            if ($this->successor != null) {
                $processed = $this->successor->handle($args);
            }
        }

        return $processed;
    }

    /**
     * 声明处理方法。
     */
    abstract protected function processing(...$args);
}