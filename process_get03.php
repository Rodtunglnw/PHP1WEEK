<?php
    $text01 = 0;
    $text02 = 0;

    echo "<hr>";
    var_dump($_GET);
    // isset ใช้สำหรับเช็คว่าตัวแปรนั้นเป็นค่าว่างหรือไม่ // exit คือการทำให้โค้ดหยุดงาน
   if (isset($_GET["submit"]) && $_GET["submit"] !="") {
    if ($_GET["text01"] != "") {
        $text01 = $_GET["text01"];
        if (is_numeric($_GET['text01'])) {
            $text01 = $_GET["text01"];
        } else {
            echo "input01 is not number";
            exit;
        }
    }
    // is_numeric ใช้สำหรับการเช็คว่า Data type นั้นเป็นตัวเลขหรือไม่ return เป็น boolean
    if ($_GET["text02"] != "") {
        if (is_numeric($_GET['text02'])) {
            $text02 = $_GET["text02"];
        } else {
            echo "input02 is not number";
            exit;
        }
    }
    echo "Result is : " .($text01+$text02);
   } else {
    echo "Cant get data";
   }
    
?>