<?php


class NewClass{

    public $fruite;
    public $color;

    function __construct($fruit, $color){
        $this->fruite = $fruit;
        $this->color = $color;
    }

    function get_fruit(){
        return $this->fruite;
    }

    function get_color(){
        return $this->color;
    }

}

$obj = new NewClass('apple','red');
echo $obj->fruite;
echo"<br>";
echo $obj->color;


echo"<br>";
echo"-----------------";
echo"<br>";

echo $obj->get_color();
echo"<br>";
echo $obj->get_fruit();



?>