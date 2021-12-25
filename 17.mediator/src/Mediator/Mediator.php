<?php
namespace Design\Src\Mediator;
/**
 * Mediator 是用于访设计模式的中介者模式的实体
 *
 * 本示例中，我用中介者模式分别调用了 es 和 db 的方法
 */
class Mediator implements MediatorInterface
{
    private $database;

    private $elasticSearch;

    public function __construct($database, $elasticSearch)
    {
        $this->database = $database;
        $this->elasticSearch = $elasticSearch;

        $this->database->setMediator($this);
        $this->elasticSearch->setMediator($this);
    }

    public function searchAll()
    {
        $this->elasticSearch->search();
    }

    public function queryDb(): string
    {
        return $this->database->getData();
    }

    public function docCreate($document)
    {
        return $this->elasticSearch->DocAdd($document);
    }
}