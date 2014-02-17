<meta http-equiv="Content-Type" content="text/html; charset=big5">
<?php require_once('Connection/ConnectToDatabase.php');
?>
<?php
mysql_select_db($database_connQuestion, $connQuestion);
$query1 = "LOCK TABLE `count` WRITE;";
$query2 = "SELECT * FROM  `count`;";
$query4 = "UNLOCK TABLE;";

mysql_query($query1, $connQuestion);
$resulta = mysql_query($query2, $connQuestion);
$rowa = mysql_fetch_array($resulta);
$ordercode = $rowa["OrderCode"] + 1;
$query3 = "UPDATE count SET `OrderCode`={$ordercode};";
mysql_query($query3, $connQuestion);
mysql_query($query4, $connQuestion);
?>