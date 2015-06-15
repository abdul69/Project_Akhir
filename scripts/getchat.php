<?php
session_start();
if(!isset($_SESSION['chatnchat'])){
header("Location:../login.php");
}
include "database.php";
$last = $_GET['last'];
$sql = "SELECT *, (SELECT REPLACE(REPLACE(REPLACE(`chatTime`,'-',''),' ',''),':','')) as timeres FROM chat WHERE (SELECT REPLACE(REPLACE(REPLACE(`chatTime`,'-',''),' ',''),':',''))  > $last";
$query = mysql_query($sql);
//echo $sql;
while( $result = mysql_fetch_assoc( $query ) ){
   $arr[] = $result;
}
echo json_encode($arr);
 
?>