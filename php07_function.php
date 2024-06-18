<?php


function testMatch($n) {
    $start_time = strtotime("now");
    if ($n == 0) {
        return 1;
    } else {
        return $n * testMatch($n - 1);
    }
    $end_time = strtotime("now");
    echo $end_time - $start_time . "Sec";
    
}
    
    // $sum = 1;
    // for ($i=$n; $i >= 1; $i--) { 
    //     $sum *= $i;
        
    // }
    // echo $sum;


// echo testMatch(1);

function fiboNumber($n, $firstnum ='0',$secondnum = '1') {
    
    if ($n == 0) {
        return $firstnum;
    } else{
        echo $firstnum;
      $thirdnum = $firstnum + $secondnum;
      
    }
        fiboNumber($n-1, $secondnum, $thirdnum);
    
}
echo testMatch(4);
?>  
