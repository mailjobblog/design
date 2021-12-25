<?php
namespace Design\Src\ProductQuality;

class Quality1 implements QualityInterface
{
    public function quality(): string
    {
        return "车间1检测中，感觉这个还不错";
    }
}