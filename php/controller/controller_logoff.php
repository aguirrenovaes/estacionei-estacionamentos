<?php
session_start();
$_SESSION['security'] = false;
$_SESSION['funcionario'] = false;
header("Location: ../../pages/admin/login.php");

?>