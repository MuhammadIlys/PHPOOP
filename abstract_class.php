

<?php

// Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
// An abstract class or method is defined with the abstract keyword:


abstract class Car{
    public $name;

    function __construct($car)
    {
        $this->name=$car;
    }

    abstract public function intro() : string;
}

class Honda extends Car{
    public function intro() :string{
        return "I am $this->name";
    }
}

class Audi extends Car{
    public function intro() :string{
        return "I am $this->name";
    }
}


$honda = new Honda('Honda');
$audi = new Honda('Audi');

echo $honda->intro();
echo '<br>' . $audi->intro();


?>