<?php
interface Giaodien{
    function header();
    function footer();
}
interface GiaodienA{
    function header();
    function footerA();
}


class GDA implements Giaodien,GiaodienA{
    function header(){
        echo __METHOD__;
    }
    function footer(){
        echo __METHOD__;
    }
    function footerA(){
        
    }
}


$gd_A = new GDA;
echo $gd_A->header();

?>