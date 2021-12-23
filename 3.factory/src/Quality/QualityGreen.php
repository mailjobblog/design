<?php
namespace Design\Src\Quality;
/**
 * 绿色车质检车间
 */
class QualityGreen implements QualityInterface {
    public function check(): String
    {
        return 'Green check ing';
    }
}