<?php

function searchProduct(int $id, array $arrSP){

    foreach($arrSP as $item){
        if($item['id'] == $id){
            return $item;
        }
    }
    return false;
}


function callView(){
    return "<h2>rtrt</h2>";
}

?>