<?php
namespace Design\Src\Part;

class Part {

    protected array $buildList = [];

    /**
     * @param $key
     * @param $value
     */
    public function setPart($key, $value){
        $this->buildList[$key] = $value;
    }

    public function Show() : array {
        return $this->buildList;
    }

    public function buildShow() {
        $str = "";
        foreach ($this->buildList as $key => $value) {
            $str .= "key:{$key}_value:{$value}";
        }
        return $str;
    }
}