<?php
 
$sql1 = "SELECT * FROM chat";
$q1 = mysql_query( $sql1 );
while( $r1 = mysql_fetch_array( $q1 ) ){
?>
 
      <div id="isi">
         <div class="isi_username"><?php echo $r1['username'];?></div>
         <div class="isi_time"> (<?php echo $r1['chatTime'];?>) </div>
         <div class="isi_isi"> - <?php echo $r1['chat'];?></div>
         <div style="clear:both;"></div>
      </div>
 
<?php
}
?>