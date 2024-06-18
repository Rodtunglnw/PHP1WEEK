<?php
    $array3 = array(8,4,3,6,1,2,7,9,8,20,33,60,21);
    $arrayCount = count($array3);
    for ($i=0; $i < $arrayCount ; $i++) { 
        for ($j=0; $j < $arrayCount  - 1 ; $j++) { 
            if ($array3[$j] > $array3[$j + 1]) {
                $temp = $array3[$j];
                $array3[$j] = $array3[$j + 1];
                $array3[$j + 1] = $temp;
            }
        }
    }
    
    echo "Sorted array : ";
    print_r($array3);
?>