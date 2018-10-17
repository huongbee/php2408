<?php

// $user = 'admin03';
// $password = '111111';

$user = 'root';
$password = '';

try{
    $db = new PDO('mysql:host=localhost;dbname=php2408_banhang',$user, $password);
    $db->exec('set names utf8');
}
catch(\Exception $e){
    echo $e->getMessage();
    die;
}


$sql = 'DELETE FROM slide WHERE id>6';
$result = $db->exec($sql);
if($result > 0){
    echo "Xoa thanh cong";
}
else{
    echo 'xoa ko thanh cong';
    var_dump($result); //false | int(0)
}




?>