<?php
session_start();
if(!isset($_SESSION['user'])){
    if(!isset($_COOKIE['user'])){
        $_SESSION['error'] = "Vui lòng đăng nhập";
        header('Location:login.php');
        return;
    }
    elseif($_COOKIE['user']!='admin'){
        $_SESSION['error'] = "Vui lòng đăng nhập, cookie";
        header('Location:login.php');
    }
    if(isset($_COOKIE['user'])){
        $_SESSION['user'] = $_COOKIE['user'];//luu lai phien lam viec
        setcookie('user',$_SESSION['user'],time()+180);
        echo 'use cookie';
    }
}
else{
    if($_SESSION['user']!='admin'){
        $_SESSION['error'] = "Vui lòng đăng nhập";
        header('Location:login.php');
    }
    echo 'use session';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>Hello, <?=$_SESSION['user']?></div>
    <div><a href="logout.php">Logout</a></div>
</body>
</html>