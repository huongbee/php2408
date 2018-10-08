<?php

class User{
    var $name;

    function __construct($ten){
        $this->name = $ten;
        echo __METHOD__. ' duoc goi';
        echo " --- ";
        echo $this->name;
    }


    function __destruct(){
        unset($this->name);
        echo '<br>';
        echo __METHOD__. ' duoc goi';
        echo '<br>';
        echo __CLASS__ .' da bi huy';
    }
}

$userA = new User('Nguyen Van A');
echo "<br><b>".$userA->name."</b>";

// var_dump($userA);


// $userB = new User('Nguyen Van B');
// $userC = new User('Nguyen Van C');



?>