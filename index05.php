<?php

$arr = [3,5,7,4]; //4

$a = [10,45,90]; //5 or 7

// array_push($arr,$a);

// print_r($arr);
// array_splice($arr,2,0,$a);
// print_r($arr);
foreach($arr  as $key=>$value){
    if($key==2){
        $arr[2] = $a;
    }
    if($key>=2){
        $arr[$key+1] = $value;
    }
}
// print_r($arr);

$str = "Hello world world!";
$count = 0;
$str = str_replace('world',"KPT",$str,$count);
// echo $str;
// echo $count;

function getA(&$a){
    return ++$a;
}

$x = 78;
// echo getA($x); // 79
// echo "<br>";
// echo $x; // 78

// echo getA($x); // 79
// echo "<br>";
// echo $x; // 79

strlen($str);
// echo strripos($str,'o');

// echo date_default_timezone_get();
date_default_timezone_set("Asia/Ho_Chi_Minh");
// print_r(getdate());
echo "<br>";

// echo time(); // 1537367074 => 19/09/2018
// 2018/2/20 21:50:03  =>  21:50:03 20-11-2018 
// 2018-11-12 21:50:03 => 

// echo date('d/m/Y',time());
// echo "<br>";
$date = new DateTime("2018-1-20 21:50:03");
$timest = $date->getTimestamp();
echo date('H:i:s d-m-Y',$timest);
echo date('H:i:s d-m-Y',strtotime("2018-1-20 21:50:03"));

?>