<?php

include_once 'DBConnect.php';

// $db = new DBConnect();

//C1
// $sql = 'UPDATE slide SET title =?, image=? WHERE id=?';
// $data = [
//     'Khuyen mai nhan dip 20/10',
//     'hinh-a.gif',
//     14
// ];
//$r = $db->executeQuery($sql,$data);

//C2
// $sql = 'UPDATE slide SET title ="12wertt" WHERE id=13';
// $r = $db->executeQuery($sql);
// if($r){
//     echo "thanh cong";
// }
// else{
//     echo 'that bai';
// }


// $sql = 'SELECT * FROM users WHERE id=? OR id > ?';
// $db = new DBConnect();
// $result = $db->loadMoreRow($sql,[1,6]);
// if($result){
//     print_r($result);
// }
// else{
//     var_dump($result);
// }

$sql = 'SELECT * FROM users WHERE id=?';
$db = new DBConnect();
$result = $db->loadOneRow($sql,[1]);
if($result){
    print_r($result);
}
else{
    var_dump($result);
}
?>