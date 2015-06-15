<?php
session_start();
include "scripts/database.php";
$sql = "DELETE FROM user WHERE username='$_SESSION[chatnchat]'";
mysql_query($sql);
unset($_SESSION['chatnchat']);
 
header("Location:login.php");
?>