<?php

class NewClass{
    public $myname;
    public $number;

    public function myfun($name){
        $this->myname = $name;
        // return $name;
    }

    public function getname(){
        return $this->myname;
    }
}

$obj = new NewClass;
$obj->myfun('ilyas');
echo "<br>";
echo $obj->getname();

echo "<br>";
$obj->number = 4; //change value of property outside the class
echo $obj->number;

var_dump($obj instanceof NewClass); // $obj is an instance of NewClass or not


?>