<?php
session_start();
include 'sanpham.php';
include 'helper.php';

$id = $_POST['id'];

$sp = searchProduct($id,$arrSP);

if($sp){
    $_SESSION['cart'] = $sp;
    echo json_encode([
        'code'=>1,
        'data'=>$_SESSION['cart'],
        'message'=>'Them thanh cong'
    ]);
}
else{
    echo json_encode([
        'code'=>0,
        'data'=>'',
        'message'=>'Khong tim thay sp'
    ]);
}


?>