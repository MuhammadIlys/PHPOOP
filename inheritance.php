
<?php



class NewClass {

    public $name;

    function __construct($name){
        $this->name = $name;
    }

    public function myfun(){
        echo "<br> you are $this->name";
    }

}

class NewChild extends NewClass{

    public function whoami(){
        echo "Who am I?";
    }

}

// $obj = new NewClass('ali');
$child = new NewChild('ali');


echo $child->whoami();
echo $child->myfun();


?>