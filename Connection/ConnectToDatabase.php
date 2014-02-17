<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connQuestion = "localhost";
$database_connQuestion = "ShoppingDatabase";
$username_connQuestion = "root";
//$password_connQuestion = "63977881851";
$password_connQuestion = "63977881851";
$connQuestion = mysql_pconnect($hostname_connQuestion, $username_connQuestion, $password_connQuestion) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES 'big5'") ;
putenv("TZ=Asia/Taipei");  
?>