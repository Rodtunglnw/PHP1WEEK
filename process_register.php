<?php
 // Blinding information from method POST
$userName = $_POST['text01'];
$password = $_POST['text02'];
$confirmPassword = $_POST['text03'];
$firstName = $_POST['text04'];
$lastName = $_POST['text05'];
$tel = $_POST['text06'];
$id_card = $_POST['text07'];
$email = $_POST['text08'];
$create_time = date('Y-m-d H:i:i'); // คือการเอา Timestamp ณ เวลานั้นๆ

// Check True False with preg_match

$checkUserName = preg_match("/^[a-zA-Z0-9]{4,12}$/",$userName);
$checkFirstName = preg_match("/^[a-zA-Z]{1,20}$/",$firstName);
$checkLastName = preg_match("/^[a-zA-Z]{1,20}$/",$lastName);
$checkEmail = preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+.[a-zA-Z]{2,30}$/",$email);

// if condition
if (!$checkUserName || $userName == "") {
    echo "Username Invalid";
    exit;
}
if ($password != $confirmPassword || $password == "") {
    echo "Password invalid ";
    exit;
} 

if (!$checkFirstName || $firstName == "") {
    echo "Firstname invalid";
    exit;   
}

if (!$checkLastName || $lastName == "") {
    echo "Lastname invalid";
    exit;
}

if (!$checkEmail || $email == "") {
    echo "Email invalid";
    exit;
}

if (!is_numeric($id_card) || (strlen($id_card) !== 13)) {
    echo "ID_CARD invalid";
    exit;
}
if (!is_numeric($tel) || (strlen($tel) !== 10)) {
    echo "Phone number invalid";
    exit;
} 
$servername = "localhost";
$username = "Pruke";
$passWord = "123456";
$dbname = 'db_users';

// Create connection
$conn = new mysqli($servername, $username, $passWord, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$password = md5($password);
$sql = "INSERT INTO user_info (`username`, `password`, `firstname`, `lastname`, `email`, `id_card`, `phone`) 
VALUES ('$userName', '$password', '$firstName', '$lastName', '$email', '$id_card', '$tel');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); // การเรียกใช้ข้อมูล Database ต้องปิดทุกครั้งเพื่อไม่ให้เกิดคอขวด

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
          td { 
            border: 1px solid;
        }
        .td_lable, .td_input {
           text-align: center;
           font-weight: bold;

        }
        table {
            margin: auto;
            
            

        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<table width="500px">
    <!-- <form action="php06_register.php" method="POST"> -->
        <tr>
            <td class="td_lable">Lable</td>
            <td class="td_input">Input Data</td>
        </tr>
        <tr>
            <td style="text-align: right;">Username</td>
            <td><?php echo $userName;?></td>
        </tr>
        
        <tr>
            <td style="text-align: right;">ชื่อ</td>
            <td><?php echo $firstName;?></td>
        </tr>

        <tr>
            <td style="text-align: right;">นามสกุล</td>
            <td><?php echo $lastName;?></td>
        </tr>
        <tr>
            <td style="text-align: right;">เบอร์โทร</td>
            <td><?php echo $tel;?></td>
        </tr>
        <tr>
            <td style="text-align: right;">Email</td>
            <td><?php echo $email;?></td>
        </tr>
        <tr>
            <td style="text-align: right;">บัตรประชาชน</td>
            <td><?php echo $id_card;?></td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <a href="/PHP01/php06_register.php"><button>Back</button></a>
            </td>
        </tr>
    <!-- </form> -->
    </table>
</body>
</html>