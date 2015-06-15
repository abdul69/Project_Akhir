<?php
include "scripts/database.php";
session_start();
if(!isset( $_SESSION['chatnchat'] )){
   header("Location:login.php");
}
?>
<html>
<head><title>ChatNchat</title><link rel="stylesheet" type="text/css" href="css/styles.css" media="screen">
</head>
 
 
 
<body onload="scrollbawah();">
   <script>
      function scrollbawah(){
      //fungsi untuk menempatkan scroll chat pada posisi paling bawah ketika halaman chat dibuka
      var objDiv = document.getElementById("centerbox");
      objDiv.scrollTop = objDiv.scrollHeight;   
      }
   </script>
<div id="wrapper">
   <div id="timecontainer"><?php include "scripts/datetime.php";?></div>
   <!--Pengambil waktu menjadi penting untuk menandai chat terakhir-->
 
   <div id="navbar"><?php echo "ANDA INGIN KELUAR " . $_SESSION['chatnchat'];?>&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></div>
   <div class="header">
    <center>Chat_Nchat<img src="img/chat-empty.svg" alt="image"></center>
   </div>
   
   <div id="centerbox">
      <?php include "scripts/chat_list.php";
      //mengambil baris chat pertama sebelum diisi
      ?>
   </div>
   <div id="chat_userlist"></div><!--untuk menempatkan data user-->
   <div style="clear:both;"></div><!--menetralkan posisi-->
 
 
<!--form-chat-->
   <div id="form">
      <form method="post" id="chatform">
         <input type="hidden" id="chatuser" name="chatuser" value="<?php echo $_SESSION['chatnchat'];?>">
         <input type="text" name="chat" id="chat">
         <input type="submit" name="submit" id="submit_chat" value="Chat">
			
      </form>
   </div>
<!--form-chat-->
 
</div>
<script type="text/javascript" src="javascripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="javascripts/chat.js"></script>

			
 
</body>
 
</html>