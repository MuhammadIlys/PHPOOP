
<?php

class A{
    const var = "hello I am a constant A I cannot be changed";
}

echo A::var;  //Method 1 of accessing constt

class B{
    const var = "hello I am a constant B";

    public function showconst(){
        return self::var;
    }
}

$objB = new B;
echo "<br>" . $objB->showconst(); //Method 2 of accessing constt




?>