<?php

class DBConnect{
    private $db = null;

    function __construct($dbName='php2408_banhang', $user='root', $password=''){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=$dbName",$user, $password);
            $this->db->exec('set names utf8');
        }
        catch(\Exception $e){
            echo $e->getMessage();
            die;
        }
    }
    //for INSERT/UPDATE/DELETE
    function executeQuery($sql, $data = []){
        $sttm = $this->db->prepare($sql);
        return $sttm->execute($data);
    }

    //for SELECT 1 row
    function loadOneRow(){

    }

    //for SELECT > 1 row
    function loadMoreRow(){
        
    }
}



?>