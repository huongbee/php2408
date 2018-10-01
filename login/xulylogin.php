<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    $pass = '111111' ; // pw luc tao tai khoan
    $hash = md5('khoaphamtraining'.md5($pass)); // luu vao db

    if($_POST['username']=='admin' && md5('khoaphamtraining'.md5($_POST['password']))==$hash){
        $_SESSION['user'] = $_POST['username'];
        header('Location:home.php');
    }
    else{
        $_SESSION['error'] = "Sai thông tin đăng nhập";
        header('Location:login.php');
    }
}
else{
    $_SESSION['error'] = "Vui lòng nhập đầy đủ thông tin";
    header('Location:login.php');
}



?>