<?php

class User{
    public $name = "Parent";
    protected $age = 25;
    private $assets = 20000;

    function __construct($name){
        $this->name = $name;
    }
    // public function setName($name){
    //     $this->name = $name;
    // }
    function getName(){
        return $this->name;
    }
    function getAge(){
        echo __METHOD__.' duoc goi';
        return $this->age;
    }
}


class Sinhvien extends User{
    // public $name = "Son";

    function __construct(){

    }
    function getNameParent(){
        return parent::getName();
    }
    // function getName(){
    //     return $this->name;
    // }
    function getAge(){
        echo __METHOD__.' duoc goi';
        return $this->age;
    }
    function getAssest(){
        return $this->assets;
    }
}
// $userA = new User('NVA');
$svA = new Sinhvien('NVA');
echo $svA->getNameParent();




// echo $svA->getName();

// echo $svA->getAge();


// echo $svA->getAssest();


// echo $svA->getName();
// echo $svA->name;
// echo $svA->age;
// var_dump($svA);