<?php

include_once 'DBConnect.php';

$db = new DBConnect();

//C1
// $sql = 'UPDATE slide SET title =?, image=? WHERE id=?';
// $data = [
//     'Khuyen mai nhan dip 20/10',
//     'hinh-a.gif',
//     14
// ];
//$r = $db->executeQuery($sql,$data);

//C2
$sql = 'UPDATE slide SET title ="12wertt" WHERE id=13';
$r = $db->executeQuery($sql);
if($r){
    echo "thanh cong";
}
else{
    echo 'that bai';
}
?>