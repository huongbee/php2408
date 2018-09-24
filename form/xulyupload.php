<?php
// $image = $_POST['image'];
$image = $_FILES['image'];
if($image['error']>0){ // ko chon file
    header('Location:uploadfile.php');
}
//co chon file
// print_r($image);
$des = '../avatar/'.$image['name'];
move_uploaded_file($image['tmp_name'],$des);


// file size <= 1Mb
// file type <= png, jpg, gif, jpeg
// rename 


?>