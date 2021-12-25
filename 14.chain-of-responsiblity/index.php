<?php
require 'vendor/autoload.php';
use Design\Src\Log\ConsuleLog;
use Design\Src\Log\DebugLog;
use Design\Src\Log\ErrorLog;

$consuleLog = new ConsuleLog(); // console 下一级没有了，所以不用传
$debugLog = new DebugLog($consuleLog); // debug 的下一级是 consule
$errorLog = new ErrorLog($debugLog); // error 的下一级是 debug

$errorLog->handle("test str 66666");