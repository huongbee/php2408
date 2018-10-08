<?php

class User{
    public $name;
    protected $age = 25;
    private $assets = 20000;

    public function __construct($name){
        $this->name = $name;
    }
    // public function setName($name){
    //     $this->name = $name;
    // }
    function getAge(){
        echo __METHOD__.' duoc goi';
        return $this->age;
    }
}

class Sinhvien extends User{
    function getName(){
        return $this->name;
    }
    function getAge(){
        echo __METHOD__.' duoc goi';
        return $this->age;
    }
    function getAssest(){
        return $this->assets;
    }
}

$svA = new Sinhvien;
echo $svA->getName();

// echo $svA->getAge();


// echo $svA->getAssest();


// echo $svA->getName();
// echo $svA->name;
// echo $svA->age;
// var_dump($svA);