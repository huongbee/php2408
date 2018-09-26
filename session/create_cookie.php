<?php

$arr = json_encode([ 
    'name'=>'Banh AFC',
    'price'=>20000
]);
setcookie('cart',$arr,time()+120);


?>