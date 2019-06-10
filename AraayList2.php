<?php


class AraayList2
{


    public $arrayList;
    public function __construct($arr = "")
    {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        } else
            $this->arrayList = array();
    }
    // Add new Object to Array List
    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }
    // Get an Object from index in Array
    public function get($index)
    {
        // if 0 <= index < array length
        if (is_integer($index)) {
            if ($index >= 0 && $index < count($this->arrayList)) {
                return $this->arrayList[$index];
            } else
                echo("ERROR in ArrayList");
        } else
            echo("ERROR in ArrayList");
    }
    // Remove an Object from index in Array
    public function remove($index)
    {
        // if 0 <= index < array length
        if (is_integer($index)) {
            if ($index >= 0 && $index < count($this->arrayList)) {
                unset($this->arrayList[$index]);
            } else
                echo("ERROR in ArrayList");
        } else
            echo("ERROR in ArrayList");
    }

}