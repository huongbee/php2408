<?php

session_start();
session_destroy();

setcookie('user','',time()-180);
header('Location:login.php');



?>