<?php
namespace Design\Src\Quality;

class QualityViolet implements QualityInterface {
    public function check(): String
    {
        return 'violet check ing';
    }
}