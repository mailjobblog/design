<?php
namespace Design\Src;

class StudyProcess
{
    /**
     * @var State
     */
    private $currentState;

    // 备忘录存档
    public function saveToMemento(): Memento {
        return new Memento(clone $this->currentState);
    }

    // 备忘录重置到存档位置
    public function restoreFromMemento(Memento $memento) {
        $this->currentState = $memento->getState();
    }

    // 读取当前类的状态
    public function getState(): State {
        return $this->currentState;
    }

    public function github()
    {
        $this->currentState = new State(State::STUDY_GITHUB);
    }

    public function baidu()
    {
        $this->currentState = new State(State::STUDY_BAIDU);
    }

    public function csdn()
    {
        $this->currentState = new State(State::STUDY_CSDN);
    }

    public function google()
    {
        $this->currentState = new State(State::STUDY_GOOGLE);
    }
}