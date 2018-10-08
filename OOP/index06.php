<?php
abstract class Law{
    public $name;

    function law1(){
        echo __METHOD__;
    }
    abstract function law2();
}

class Execute extends Law{
    function law2($a=0){
        echo $a;
        // echo __METHOD__;
    }
}

$e = new Execute;
// $e->law1();
$e->law2(2);

// var_dump($e);


?>