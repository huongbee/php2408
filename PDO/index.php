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

// $data = [
//     'hinh-2.png',
//     'http://.....',
//     'Khuyen mai...'
// ];
// $sql = "INSERT INTO slide(image,link,title) 
//         VALUES(?,?,?)";


// $data = [
//     ':image'=>'hinh-2.png',
//     ':link'=>'http://.....',
//     ':title'=>'Khuyen mai...'
// ];
// $sql = "INSERT INTO slide(image,link,title) 
// VALUES(:image,:link,:title)";

// $sttm = $db->prepare($sql);
// $check = $sttm->execute($data);
// if($check){
//     echo "thanh cong";
// }
// else{
//     echo 'that bai';
// }

// $image = 'hinh-a.png';
// $link = 'http://...';
// $title = 'Hinh a';

// $sql = "INSERT INTO slide(image,link,title) 
// VALUES(?,?,?)";

// $sttm = $db->prepare($sql);

// $sttm->bindParam(1,$image);
// $sttm->bindParam(2,$link);
// $sttm->bindParam(3,$title);

// // $sttm->bindValue(1,$image);
// // $sttm->bindValue(2,$link);
// // $sttm->bindValue(3,$title);

// $check = $sttm->execute();

// if($check){
//     echo "thanh cong";
// }
// else{
//     echo 'that bai';
// }



$image = 'hinh-a.png';
$link = 'http://...';
$title = 'Hinh a';

$sql = "INSERT INTO slide(image,link,title) 
VALUES(:image,:link,:title)";

$sttm = $db->prepare($sql);

$sttm->bindParam(':image',$image);
$sttm->bindParam(':link',$link);
$sttm->bindParam(':title',$title);

// $sttm->bindValue(':image','Hinh-c.gif');
// $sttm->bindValue(':link','https://thegioididong.com/');
// $sttm->bindValue(':title','Mung 20/10');

$check = $sttm->execute();

if($check){
    echo "thanh cong";
}
else{
    echo 'that bai';
}


?>