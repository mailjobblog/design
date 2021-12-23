<?php
namespace Design\Src\Quality;

class QualityYellow implements QualityInterface {
    public function check(): String
    {
        return 'yellow check ing';
    }
}

