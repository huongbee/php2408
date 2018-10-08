<?php

class User{
    var $name;
    var $diemToan;

    function setName($ten){
        $this->name = $ten;
    }    

    function setDiemToan($diem){
        $this->diemToan = $diem;
    }

    function getDiemToan(){
        return $this->diemToan;
    }
}


$userA = new User();
$userA->setName('Nguyen Van A');
$userA->setDiemToan(10);
echo $userA->name;
echo '-';
echo $userA->getDiemToan();

// var_dump($userA);



?>