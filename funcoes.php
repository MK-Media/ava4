<?php
    function verifica_sequencia_com_4($nAr, $t){
        if($nAr[0] < $nAr[1]){
            if($nAr[1] >= $nAr[2]){
                if($nAr[1] < $nAr[3]){
                    var_dump($nAr);
                    echo "True"; 
                }else{
                    var_dump($nAr);
                    echo "False";
                }
            }else{
                var_dump($nAr);
                echo "True"; 
            }
        }else{
            if($nAr[1] < $nAr[2]){
                if($nAr[2] < $nAr[3]){
                    var_dump($nAr);
                    echo "True";
                }
            }else{
                var_dump($nAr);
                echo "False";
            }
        }
    }
    

    function verifica_sequencia_com_3($nAr, $t){
               
        if($nAr[0] < $nAr[1]){
            var_dump($nAr);
            echo "True";      
        }else{
            if($nAr[1] < $nAr[2]){
                var_dump($nAr);
                echo "True";  
            }else{
                var_dump($nAr);
                echo "False";
            }
        }
        
        
    }    
    
    function verifica_sequencia_com_2($nAr, $t){
            
        if($nAr[0] < $nAr[1]){
            var_dump($nAr);
            echo "True";
        }else{
            var_dump($nAr);
            echo "False";
        }
    }
    
    function verifica_sequencia($nAr, $t){
        
        $rs = false;
        
        $contadorM = 0;      
        for ($c2 = 0; $c2<$t; $c2++){
            
            if($c2 < $t-1){
                if($nAr[$c2] < $nAr[$c2 + 1]){
                    
                }else{                    
                    $contadorM ++;                    
                }
            }else{
                
            }          
            
        }
        
        if($contadorM >= 2){
            var_dump($nAr);
            echo "false";
        }else{
            var_dump($nAr);
            echo "true";
        }
        
    }
?>