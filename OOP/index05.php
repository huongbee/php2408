<?php
class User{
    public static $name = 'Nguyen van a';

    static function setName($ten){
        User::$name = $ten;
    }
    
}

// $user = new User;
// echo $user->name;
echo User::$name;
echo "<br>";
User::setName('Nguyen Van B');
echo User::$name;

echo "<br>";

$userN = new User;
echo $userN::$name; 
?>