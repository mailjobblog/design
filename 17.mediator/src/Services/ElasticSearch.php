<?php
namespace Design\Src\Services;

class ElasticSearch extends ColleagueAbstract
{
    public function search() {
        return "es 查询到了所有的数据";
    }

    public function DocAdd($document) {
        return "ES 文档插入失败";
    }
}