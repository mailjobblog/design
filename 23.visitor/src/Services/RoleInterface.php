<?php
namespace Design\Src\Services;

use Design\Src\Visitor\VisitorInterface;

interface RoleInterface
{
    /**
     * 接受访问者调用它针对该元素的新方法
     * @param VisitorInterface $visitor
     */
    public function accept(VisitorInterface $visitor);
}