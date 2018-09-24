<?php
// $image = $_POST['image'];
$image = $_FILES['image'];
if($image['error']>0){ // ko chon file
    header('Location:uploadfile.php');
}
//co chon file
// print_r($image);
// $des = 'avatar/'.$image['name'];
// move_uploaded_file($image['tmp_name'],$des);


// file size <= 10kb
if($image['size']<= 10*1024){
    // file type <= png, jpg, gif, jpeg
    $oldName = $image['name'];
    $ext = pathinfo($oldName,PATHINFO_EXTENSION); // txt
    $arrExt = ['png', 'jpg', 'gif', 'jpeg','txt'];
    if(!in_array($ext,$arrExt)){
        echo "File not allow!";
    }
    else{
        // rename 
        $newName = date('Y-m-d-H-i-s-',time()).$oldName;
        mkdir('users',0755);
        $des = 'users/'.$newName;
        move_uploaded_file($image['tmp_name'],$des);
        if(file_exists("users/$newName")){
            echo "Upload successfuly!";
        }
        else echo 'Fail!';

    }
}
else echo "File too large!";


?>