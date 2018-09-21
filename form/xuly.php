<?php

// if(isset($_GET['txtData'])){
//     echo $_GET['txtData'];
// }
// else echo "vui long truyen data";
// if(isset($_POST['txtData'])){
//     echo $_POST['txtData'];
// }
// else {
//     //echo "vui long truyen data";
//     header('Location:index.php');
// }
// echo $_POST['txtData'];

// echo $a;


//    admin 111111
if( isset($_POST['txtUn']) 
    && isset($_POST['txtPw']) 
    && $_POST['txtUn']=="admin"
    && $_POST['txtPw']=='111111') {
        echo "chao ".$_POST['txtUn'];
}
else{
    header('Location:index.php');
}

?>