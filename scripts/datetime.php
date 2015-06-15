<?php
$sql = "SELECT *, (SELECT REPLACE(REPLACE(REPLACE(`chatTime`,'-',''),' ',''),':','')) as timeres FROM chat ORDER BY id DESC LIMIT 1";
$q   = mysql_query( $sql );
$r   = mysql_fetch_array( $q );
echo $r['timeres'];
?>