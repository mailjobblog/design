<?php
require 'vendor/autoload.php';
use Design\Src\Invoker\Invoker;
use Design\Src\Services\ReceiverService;
use Design\Src\Cmd\ReceiverCmd;

// 命令调度着
// 负责命令的组装和执行
$invoker = new Invoker();

// 命令调用的目标类
$receiverService = new ReceiverService();

// 设置命令
$invoker->setCommand(new ReceiverCmd($receiverService));

// 执行命令
$invoker->run();

// 获取类的输出结果
echo $receiverService->getOutput();