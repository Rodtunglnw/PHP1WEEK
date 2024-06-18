
<?php
session_start();
print_r($_SESSION);
if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
    header("Location: login_success.php");
    exit();
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        table {
            margin: auto;
            border: 1px solid black;
            margin-top: 250px;
        }
        #btn_submit {
            margin-left: 30px;
        }
    </style>
</head>
<body>
    <table>
        <form action="process_login.php" method="post">
        <tr>
            <td>Username</td>
            <td><input type="text" value="username" name="username" id="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" value="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td>
                <div id="btn_submit">
                    <input type="submit" name="submit" value="submit" id="submit">
                </div>  
            </td>
        </tr>
        </form>
    </table>
</body>
</html>