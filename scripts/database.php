<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'chatnchat';
 
if(mysql_connect($dbhost,$dbuser,$dbpass)){
mysql_select_db($dbname);
}else{
echo "Error when access data";
}
?>