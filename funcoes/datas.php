<?php  
     function data($data){
        return date("d/m/Y",strtotime($data));
    }
    function idade($nascimento){
        $idade= intval(date("Y"))-intval(date("Y",strtotime($nascimento)));
        return $idade;
    }
   