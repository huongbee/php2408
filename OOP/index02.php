<?php

class Calculate{
    var $a, $b;

    function setValue($aa, $bb){
        $this->a = $aa;
        $this->b = $bb;
    }

    function tinhTong(){
        return $this->a + $this->b;
    }
}
$soA = $_GET['a'];
$soB = $_GET['b'];

$data = new Calculate;
$data->setValue($soA, $soB);
echo "$soA + $soB = ".$data->tinhTong();


?>