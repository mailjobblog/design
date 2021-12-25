<?php
namespace Design\Src\Cmd;
use Design\Src\Services\ReceiverService;

/**
 * 这个具体命令
 *  但是外部调用者只知道，这个是否可以执行。
 */
class ReceiverCmd implements CommandInterface
{
    /**
     * @var ReceiverService
     */
    private $output;

    /**
     * 每个具体的命令都来自于不同的接收者。
     * 这个可以是一个或者多个接收者，但是参数里必须是可以被执行的命令。
     *
     * @param ReceiverService $console
     */
    public function __construct(ReceiverService $console)
    {
        $this->output = $console;
    }

    /**
     * 负责调用和执行目标类的方法
     * 有时候，这里没有接收者，并且这个命令执行所有工作。
     */
    public function execute()
    {
        $this->output->enableDate();
        $this->output->write('Hello World');
    }
}