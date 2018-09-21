<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

if( isset($_POST['txtUn']) 
    && isset($_POST['txtPw']) 
    && $_POST['txtUn']=="admin"
    && $_POST['txtPw']=='111111') {
        echo "chao ".$_POST['txtUn'];
}

else{

    // isset($_POST['txtUn']) ? $_POST['txtUn'] : ''
?>

    <form method="post">
        Username: <input value="<?=isset($_POST['txtUn'])?$_POST['txtUn']:''?>" type="text" name="txtUn"><br><br>
        Username: <input value="<?=@$_POST['txtUn']?>" type="text" name="txtUn"><br><br>
        Password: <input type="password" name="txtPw"><br><br>
        <button type="submit" name="btnSend">Login</button>
    </form>
<?php
}?>
</body>
</html>