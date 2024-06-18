<?php
session_start();
session_destroy();
header("Location: php10_login.php");
// echo "<script>window.location.href ='http://localhost/PHP01/php10_login.php';</script>";
exit;

?>


///http://localhost/PHP01/php10_login.php