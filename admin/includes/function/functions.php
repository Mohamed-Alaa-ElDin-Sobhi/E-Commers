<?php 
function gittitle(){
    global $pagetitle ;
    if(isset($pagetitle)){

    }else{
        $pagetitle = "mo" ;
    }
    return $pagetitle ;
}