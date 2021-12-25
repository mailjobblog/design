<?php
namespace Design\Src\Services;
use Design\Src\Mediator\MediatorInterface;

/**
 * 抽象类，该类对象虽彼此协同却不知彼此，只知中介者 Mediator 类
 */
abstract class ColleagueAbstract
{
    protected $mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}