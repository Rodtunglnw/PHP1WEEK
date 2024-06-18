<?php
    session_start();
   print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
       .divovr {
        border: 1px solid red;
        width: 500px;
        text-align: center;
        margin: auto;
        border-radius: 50px;
       
      
       }
    </style>
</head>
<body>
    <div class="divovr">
    <div class="username">
        <?php echo "Username is : " .$_SESSION['username']; ?>
    </div>
    <div class="password">
        <?php echo "Password is : " .$_SESSION['password']; ?>
    </div>
    <div>
       
        <a href='destroy.php'><button>Logout</button></a>
    </div>
    </div>
    <script>
       
    </script>
</body>
</html>

