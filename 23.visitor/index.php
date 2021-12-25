<?php
require 'vendor/autoload.php';
use Design\Src\Visitor\RoleVisitor;
use Design\Src\Services\Group;


// 定义具体的访问者
$roleVisitor = new RoleVisitor();

// 添加元素
$group = new Group("admin");
$group->accept($roleVisitor);


// test
$visited = $roleVisitor->getVisited()[0];
var_dump($visited->getName());