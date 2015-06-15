<?php
session_start();
if(!isset($_SESSION['chatnchat'])){
header("Location:login.php");
}
include "database.php";
$sql2 = "SELECT *, CONCAT('http://gravatar.com/avatar/',MD5(email),'?s=25') AS gravatar FROM user ORDER BY loginDate DESC";
$q2   = mysql_query( $sql2 );
while( $r2   = mysql_fetch_assoc( $q2 ) ){
   $arr[] = $r2;
}
echo json_encode( $arr );
?>