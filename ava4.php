<?php
    include "funcoes.php";
    $ar = array(

    $ar1 = [1,3,2,1],
    $ar2 = [1,3,2],
    $ar3 = [1,2,1,2],
    $ar4 = [3,6,5,8,10,20,15],
    $ar5 = [1,1,2,3,4,4],
    $ar6 = [1,4,10,4,2],
    $ar7 = [10,1,2,3,4,5],
    $ar8 = [1,1,1,2,3],
    $ar9 = [0,-2,5,6],
    $ar10 = [1,2,3,4,5,3,5,6],
    $ar11 = [40,50,60,10,20,30],
    $ar12 = [1,1],
    $ar13 = [1,2,5,3,5],
    $ar14 = [1,2,5,5,5],
    $ar15 = [10,1,2,3,4,5,6,1],
    $ar16 = [1,2,3,4,3,6],
    $ar17 = [1,2,3,4,99,5,6],
    $ar18 = [123,-17,-5,1,2,3,12,43,45],
    $ar19 = [3,5,67,98,3],
    );
    
    $indice = 16; # indice do array para testes
    $t = sizeof($ar[$indice]);
    $nAr = $ar[$indice];
    
    
    
    if($t==2){
        
        $v = verifica_sequencia_com_2($nAr, $t);
        
    }elseif($t==3){
        
        $v = verifica_sequencia_com_3($nAr, $t);
        
    }elseif($t==4){
        
        $v = verifica_sequencia_com_4($nAr, $t);
        
    }else{
        $v = verifica_sequencia($nAr, $t);
    }
    
    
    
?>