<?php

if(session_id() == '') {
    session_start();
} 

$servername = "localhost";
$usernameDB = "Pruke";
$passwordDB = "123456";
$dbname = 'db_users';

// Create connection
$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
$username =  mysqli_real_escape_string($conn,$_POST['username']); // mysqli_real_escape_string เป็นการซ่อน parameter ทำให้ Hacker เข้ามาดู Database ของเราได้ยาก
$password =  mysqli_real_escape_string($conn,$_POST['password']);
$password = md5($password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT username, password FROM user_info WHERE status = '1' AND username = '$username' AND password = '$password'";
// echo $sql; exit;
$result = $conn->query($sql);

// result -> num_rows == 1 คือการเช็คว่าถ้าเจอมันจะเท่ากับ 1 จากคำสั่ง $sql
if ($result->num_rows == 1) {
    echo $username . $password;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("Location: http://localhost/PHP01/login_success.php");
    exit(); 
  
    
} else {
  echo "0 results". "<br/>". "Check Username and Password";
}
$conn->close();
?>
