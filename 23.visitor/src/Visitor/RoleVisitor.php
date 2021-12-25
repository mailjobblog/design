<?php
namespace Design\Src\Visitor;
use Design\Src\Services\User;
use Design\Src\Services\Group;

/**
 * 具体的访问者
 */
class RoleVisitor implements VisitorInterface
{
    private $visited = [];

    public function visitGroup(Group $role)
    {
        $this->visited[] = $role;
    }

    public function visitUser(User $role)
    {
        $this->visited[] = $role;
    }

    public function getVisited(): array
    {
        return $this->visited;
    }

}