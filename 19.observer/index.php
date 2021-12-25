<?php
require "vendor/autoload.php";
use Design\Src\Services\User;
use Design\Src\Observer\TeacherObserver;
use Design\Src\Observer\MomObserver;

// new 被观察的类
$user = new User();

// 绑定观察对象
$user->attach(new TeacherObserver());
$user->attach(new MomObserver());

// 执行测试
$user->setState(666);