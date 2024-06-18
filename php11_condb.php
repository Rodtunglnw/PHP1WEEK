<?php
$servername = "localhost";
$username = "Pruke";
$password = "123456";
$dbname = 'db_users';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

// $sql = "SELECT * FROM user_info WHERE status = '1'; ";
// $result = $conn->query($sql);

// $sql = "INSERT INTO user_info (`username`, `password`, `firstname`, `lastname`, `email`, `id_card`, `phone`) 
// VALUES ('test03', '123456', 'Rodtung', 'Meb', 'the_invoker_79@hotmail.com', '4444444444444', '0928391665');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); // การเรียกใช้ข้อมูล Database ต้องปิดทุกครั้งเพื่อไม่ให้เกิดคอขวด



?>