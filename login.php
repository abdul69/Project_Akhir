<?php
include "scripts/database.php";
if( isset( $_POST['submit'] ) ){
   $username   = $_POST['username'];
   $email      = $_POST['email'];
   $sql  = "INSERT INTO `user` (`username`,`email`) VALUES ('$username','$email')";
   if(!mysql_query( $sql )){
      header( "Location:login.php?err=1" );
   }else{
      session_start();
      $_SESSION['chatnchat']=$username;
      header( "Location:index.php" );
   }
   
}
?>
<html>
<head><title>ChatNchat</title><link rel="stylesheet" type="text/css" href="css/styles.css"></head>

 	<div class="header">
    <center>Chat_Nchat<img src="img/chat-empty.svg" alt="image"></center>
	</div>
 
<div id="wrapper">
<div id="centerbox">
 
<p>Sign Up/In Chat_Nchat</p>
   
   <form method="post" id="form-login">
      <input type="text" id="username" name="username" value="username" onclick="this.value='';"><br />
      <input type="text" name="email" id="email" value="email" onclick="this.value='';"><br />
      <input type="submit" name="submit" id="submit_login" value="Login">
   </form>
<?php if(isset($_GET['err'])){
echo "User Sudah Digunakan..!!!";
}?>
 
</div>
<div style="clear:both;"></div>
 
 
 
</div>
 
</div>
 
</body>
 
</html>