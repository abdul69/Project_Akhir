<?php
include "database.php";
session_start();
if(isset($_SESSION['chatnchat'])){
   
   if(isset($_POST['submit'])){
      $chat = $_POST['chat'];
      $chatuser = $_POST['chatuser'];
      
 
      $sql = "INSERT INTO `chat` (`username`,`chat`) VALUES ('$chatuser','$chat')";
      mysql_query($sql);
   }
}else{
header("Location:../login.php");
}
?>