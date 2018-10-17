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

// $id = '6';
// $sql = "DELETE FROM slide WHERE id>$id";
// $result = $db->exec($sql);
// if($result > 0){
//     echo "Xoa thanh cong";
// }
// else{
//     echo 'xoa ko thanh cong';
//     var_dump($result); //false | int(0)
// }


$sql = "INSERT INTO slide(image,link,title) 
        VALUES('hinh-1.png','http://....', 'Khuyến mãi 30% nhân dịp 20/10')";

$sttm = $db->prepare($sql);
$check = $sttm->execute();
if($check){
    echo "thanh cong";
}
else{
    echo 'that bai';
}


?>