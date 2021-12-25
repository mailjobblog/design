<?php
namespace Design\Src\Mediator;
/**
 * MediatorInterface 接口为 Mediator 类建立契约
 * 该接口虽非强制，但优于 Liskov 替换原则。
 */
interface MediatorInterface
{
    // es 文档创建
    public function docCreate($content);

    // 查询 es 内容
    public function searchAll();

    // 查询数据库
    public function queryDb();
}