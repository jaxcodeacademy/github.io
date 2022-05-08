<?php
session_start();
setcookie("jaxcodeid", "", time() - 3600);

//unset($_SESSION['username']);
session_destroy();

header("Location: index.php");
exit;
?>


