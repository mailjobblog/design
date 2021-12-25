<?php
namespace Design\Src\Services;
use Design\Src\Visitor\VisitorInterface;

class Group implements RoleInterface
{
    private $name;

    /**
     * 接受访问者调用它针对该元素的新方法
     * @param VisitorInterface $visitor
     */
    public function accept(VisitorInterface $visitor)
    {
        $visitor->visitGroup($this);
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return sprintf('Group %s', $this->name);
    }


}