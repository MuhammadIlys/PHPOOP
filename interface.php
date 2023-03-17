
<?php

//When one or more classes use the same interface, it is referred to as "polymorphism".

interface AnimalSound{
    public function makesound();
}

class Cat implements AnimalSound{
    public function makesound()
    {
        echo "meow";
    }
}


class Dog implements AnimalSound{
    public function makesound()
    {
        echo "bark";
    }
}


$cat = new Cat;
$dog = new Dog;
echo $cat->makesound();
echo "<br>";
echo $dog->makesound();
?>