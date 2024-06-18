<?php
    // for ($i=0; $i < $_POST['text01'] ; $i++) { 
    //     echo $i."*";
    //     echo "<br/>";
    // }

 
//     // echo "<hr>";
//     // var_dump($_POST);
//     // isset ใช้สำหรับเช็คว่าตัวแปรนั้นเป็นค่าว่างหรือไม่ // exit คือการทำให้โค้ดหยุดงาน
//    if (isset($_POST["submit"]) && $_POST["submit"] !="") {
//     if ($_POST["text01"] != "") {
//         $text01 = $_POST["text01"];
//         if (is_numeric($_POST['text01'])) {
//             $text01 = $_POST["text01"];
//         } else {
//             echo "input01 is not number";
//             exit;
//         }
//     }
//     // is_numeric ใช้สำหรับการเช็คว่า Data type นั้นเป็นตัวเลขหรือไม่ return เป็น boolean
//     // if ($_POST["text02"] != "") {
//     //     if (is_numeric($_POST['text02'])) {
//     //         $text02 = $_POST["text02"];
//     //     } else {
//     //         echo "input02 is not number";
//     //         exit;
//     //     }
//     // }
//     echo "Result is : " .$text01;
//    } else {
//     echo "Cant get data";
//    }
        // for ($i=0; $i < $_POST['text01']; $i++) {
        //     for ($j=0; $j < $i; $j++) { 
        //         echo "*";
        //     } 
        //     echo "<br/>";
            
        // }
        // for ($i=$_POST['text01']; $i > 0; $i--) {
        //         for ($j=$i; $j > 0 ; $j--) { 
        //             echo "*";
        //         }
        //         echo "<br/>";   
        // } 
        $sum = 0;
        $start_time = strtotime("now");
      for ($i=0; $i <= $_POST['text01']; $i++) { 
    
        $sum += $i;
        
       
      }
      echo $sum. "<br/>";
      $end_time = strtotime("now");
      echo "<hr/>";
      echo $end_time - $start_time . "Sec .";
      
?>