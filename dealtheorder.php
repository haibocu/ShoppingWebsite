<meta http-equiv="Content-Type" content="text/html; charset=big5">
<?php
if(!isset($_GET['id'])){
	$ERROR_MESG="找不到相應的訂單！";
     echo "<script language=javascript>
             alert('$ERROR_MESG') ;
             window.location.href='manage.php';
          </script>";
}
?>
<?php require_once('Connection/ConnectToDatabase.php');
?>
<?php
mysql_select_db($database_connQuestion, $connQuestion);

$updateorderquery = "UPDATE `order` SET Status = 'dealed'
WHERE OrderNumber = '{$_GET['id']}'";
mysql_query($updateorderquery, $connQuestion);

$success_message="訂單編號：{$_GET['id']}已處理成功！";
echo "<script language=javascript>
		alert('$success_message') ;
        window.location.href='manage.php';
      </script>";
?>