<?php
//unlink('avatar/Huong dan.txt');


$images = $_FILES['avatar'];
// print_r($images);
//check file size : all valid
foreach($images['size'] as $size){
    if($size>5*1024){
        // echo "File too large!";
        // exit;
        die('File too large!');

    }
}


//check file type....

$year = date('Y',time());
$month = date('m',time());

if(!file_exists("$year")){
    mkdir("$year",0777);
}
if(!file_exists("$year/$month")){
    mkdir("$year/$month",0777);
}

$path = "$year/$month";
foreach($images['tmp_name'] as $key=>$tmpName){
    $name = rand(1,999999).'-'.$images['name'][$key];
    move_uploaded_file($tmpName,$path.'/'.$name);
}

echo 'success';


?>