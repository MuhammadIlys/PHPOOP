
<?php

class NewClass {

    public $name;

    function __construct($name){
        $this->name = $name;
    }
 

    function __destruct()   //will call at the end of script
    {
        echo "The name is $this->name";
    }

}

$obj = new NewClass('ali');



?>