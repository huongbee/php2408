<?php

// $arr = [1.4,'name', 666,45];
// echo $arr[2];
// $count = count($arr);
// for($i=0; $i<$count; $i++){
//     echo $arr[$i];
//     echo "<br>";
// }

// $arr = [
//     'name1' => 'PHP',
//     'name2' => 'JS',
//     'name3' => 'MySQL',
//     1 => 'Angular'
// ];
// echo $arr['name3'];
// for($i=0; $i<count($arr); $i++){
//     echo $arr[$i];
//     echo "<br>";
// }
// foreach($arr as $value){
//     echo $value;
//     echo "<br>";
// }

// foreach($arr as $key=>$value){
//     echo $key . " : " .$value;
//     echo "<br>";
// }


// echo sizeof($arr);
// echo "<br>";
// $a = 'name';
// print_r($a);
// echo "<br>";
?>
<!-- <?=$a?> -->
<br>
<?php //echo $a?>



<?php
$arr1 = [1,3,5,7,9];

$arr2 = [
    'name1' => 'PHP',
    'name2' => 'JS',
    'name3' => 'MySQL',
    1 => $arr1
];
$arr3 = [4,6,$arr2];

echo $arr3[2][1][4];
// echo $arr2[1][2];

echo "<pre>";
print_r($arr3)

?>
