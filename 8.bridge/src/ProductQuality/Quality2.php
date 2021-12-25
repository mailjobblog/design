<?php
namespace Design\Src\ProductQuality;

class Quality2 implements QualityInterface
{
    public function quality(): string
    {
        return "我们2号比较严格，你还是下次再来吧";
    }
}