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

echo getA($x); // 79
echo "<br>";
echo $x; // 79

strlen($str);
echo strripos($str,'o');

echo date_default_timezone_get();
date_default_timezone_set("Asia/Ho_Chi_Minh");
print_r(getdate());

// echo time(); // 1537367074 => 19/09/2018
// 2018/20/11 21:50:03  =>  21:50:03 20-11-2018 
// 2018-20-11 21:50:03 => 



?>