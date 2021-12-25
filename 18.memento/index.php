<?php
require "vendor/autoload.php";
use Design\Src\StudyProcess;

$ticket = new StudyProcess();
$ticket->github();
$s = $ticket->getState();
echo $s . PHP_EOL;

$memento = $ticket->saveToMemento();
$ticket->baidu();
$s = $ticket->getState();
echo $s . PHP_EOL;

// 现在已经恢复到已打开的状态，但需要验证是否已经克隆了当前状态作为副本
$ticket->restoreFromMemento($memento);
$s = $ticket->getState();
echo $s . PHP_EOL;