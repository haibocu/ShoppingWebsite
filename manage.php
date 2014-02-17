<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['account_name'])){
	
	 $ERROR_MESG = "您還沒有登錄，請先登錄";
     echo "<script language=javascript>
             document.execCommand('stop');
			 window.stop();
			 alert('$ERROR_MESG') ;
			window.location.href='login.php';
          </script>";
}

require_once('Connection/ConnectToDatabase.php');
$mark = 0;
mysql_select_db($database_connQuestion, $connQuestion);
$query = "SELECT Mailbox FROM manager";
$result = mysql_query($query, $connQuestion) or die(mysql_error());
if($row = mysql_fetch_array($result)){
do{
	  if($row["Mailbox"] == $_SESSION['account_name']){
		  $mark = 1;
		  }
	}while($row = mysql_fetch_array($result));
}

if($mark == 0){
	
	 $ERROR_MESG = "您並非系統管理員，請重新登錄";
     echo "<script language=javascript>
             document.execCommand('stop');
			 window.stop();
			 alert('$ERROR_MESG') ;
			window.location.href='login.php';
          </script>";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>管理員界面</title>
<link rel=stylesheet type="text/css" href="cart_order_manage.css">
</head>
<body>
<table width="800" align="center" border="2" cellpadding="0" cellspacing="0" class="othersforlogin">
<tr>
<td align="center"><span class="manageboard">管理員操作界面</span></td>
</tr>
<hr />
<tr>
<td align="center" height="800" valign="top">
<div>
<table width="800">
<tr>
<td colspan="5" class="titlefont">待處理訂單</td></tr>
<tr class="thfont">
<th align="center">訂單編號</th>
<th align="center">訂貨人</th>
<th align="center">訂單日期</th>
<th align="center">送貨地址</th>
<th align="center">操作</th>
</tr>

<?php
mysql_select_db($database_connQuestion, $connQuestion);
$query = "SELECT order.OrderNumber AS ordercode, Mailbox, OrderTime, Address FROM `order` WHERE Status = 'waiting'";
$result = mysql_query($query, $connQuestion) or die(mysql_error());
if($row = mysql_fetch_array($result)){
do{
	  echo "<tr><td align='center' class='tdfont'>";
	  echo $row["ordercode"];
	  echo "</td><td align='center' class='tdfont'>";
	  echo $row["Mailbox"];
	  echo "</td><td align='center' class='tdfont'>";
	  echo $row["OrderTime"];
	  echo "</td><td align='center' class='tdfont'>";
	  echo $row["Address"];
	  echo "</td><td align='center' class='tdfont'>";
	  echo "<a href='dealtheorder.php?id={$row['ordercode']}'>處理</a>";
	  echo "</td></tr>";
	}while($row = mysql_fetch_array($result));
}else{
	echo "<tr><td colspan='5' align='center' class='tdtotalpricefont'>所有訂單已處理完畢！</td></tr>";
	}
?>
</table>
</div>
</td></tr>
<!--結尾-->

<tr>
<td align="center">
Copyright @2013 South China University of Technology / Guangzhou Campus. All Rights Reserved.<br/>廣東省廣州市番禺區廣州大學城外環東路381號 &nbsp;&nbsp; 電話:(020)39380110
</td>
</tr>

<!--結尾-->
</table>
</body>
</html>