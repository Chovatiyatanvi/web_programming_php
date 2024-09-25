<?php  
    $vCount = 0;    
    $str = "A,E,I,O,U"; 
    $str = strtolower($str);  
    for($i = 0; $i < strlen($str); $i++) {  
    if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') {  
        $vCount++;  
    }   
    else if($str[$i] >= 'a' && $str[$i] <= 'z') {   
        
        }  
    }  
    echo "Number of vowels : " , $vCount;   
?>  