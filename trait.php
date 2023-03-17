

<?php

trait message{
    public function mymessage(){
        return "i am the message";
    }
}

class Message1{
    use message;
}

class Message2{
    use message;
}

$msg1 = new Message1;
$message = $msg1->mymessage();
echo $message . " from class 1";;

$msg2 = new Message2;   // NO MULTIPLE INHERITENCE BUT STILL USE TRAIT BY 2 DIFFERENT CLASSES
$message = $msg2->mymessage();
echo"<br> " . $message . " from class 2";

?>