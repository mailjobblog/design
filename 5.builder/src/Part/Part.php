<?php
namespace Design\Src\Part;

class Part extends PartAbstract {

    public function Show() : array {
        $result = array();
        foreach ($this->data as $k => $obj) {
            switch ($k) {
                case "engine":
                case "wheel":
                    $result[$k] = $obj->make();
                    break;
                default:
                    $result["undefined"] = "undefined";
            }
        }
        return $result;
    }

}