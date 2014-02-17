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
?>
<?php require_once('Connection/ConnectToDatabase.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>我的訂單</title>
<link rel=stylesheet type="text/css" href="homework.css">
<link rel=stylesheet type="text/css" href="cart_order_manage.css">
</head>

<body>
<table width="800" align="center" border="2" cellpadding="0" cellspacing="0">
<!--在這裡添加Common Area-->
<!--
<?php
	include 'Common_Area.php';
?>
-->

<tr height="40">
<td><div id="welcomebar" class="welcomebar">
<table align="right"><tr>
<td>
<?php
//session_start();
if(isset($_SESSION['account_name'])){
	echo "您好！"."{$_SESSION['account_name']}";
	echo "</td><td><a href='logout.php' class='welcomebara'>註銷</a></td>";
	
}else{
	echo "您好，歡迎來到傳承二手書店！";
	echo "</td><td><a href='login.php' class='welcomebara'>登錄</a></td>";
}
?>
<td><a href="register.php" class="welcomebara">&nbsp;免費註冊</a></td>
</tr></table>
</div>
</td>
</tr>
<tr>
<td>
<table align="center" width="800">
<tr>
<td width="146" height="55">
<div id="logo"><a href="index.php"><img src="file/Logo.png" width="146" height="55" /></a></div>
</td>
<td width="20">
</td>
<td width="400" valign="middle">
<FORM method=GET action="http://www.google.com/search">
<TABLE bgcolor="#FFFFFF"><tr><td>
<A HREF="http://www.google.com/intl/zh-CN/">
<IMG SRC="http://www.google.com/logos/Logo_40wht.gif" 
border="0" ALT="Google" align="absmiddle" width="81" height="27"></A>
<INPUT TYPE=text name=q size=20 maxlength=255 value="">
<INPUT TYPE=hidden name=hl  value=zh-CN>
<INPUT type=submit name=btnG  value="Google 搜索">
</td></tr></TABLE>
</FORM>
</td>
<td width="100" align="center" valign="middle"><a href="cart.php" class="leadingbara">購物車<img src="file/cart.png" width="25" height="25" align="absmiddle"/></a></td>
<td align="center"><a href="order.php" class="leadingbara">我的訂單</a>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height="80">
<table align="center" cellspacing="10">
<tr>
<td>|</td>
<td><a href="index.php" class="leadingbara">首頁</a></td>
<td>|</td>
<td><a href="news.php" class="leadingbara">最新消息</a></td>
<td>|</td>
<td><a href="#" class="leadingbara">電子圖書&數據庫</a></td>
<td>|</td>
<td><a href="#" class="leadingbara">我的書庫</a></td>
<td>|</td>
<td><a href="about.php" class="leadingbara">關於我們</a></td>
<td>|</td>
<td><a href="#" class="leadingbara">友情鏈接</a></td>
<td>|</td>
</tr>
</table>
</td>
</tr>

<!--在這裡添加Common Area-->
<tr>
<td height="800" valign="top">
<table width="800">
<tr>
<td colspan="4" class="titlefont">訂單處理中</td></tr>
<tr class="thfont">
<th align="center">訂單編號</th>
<th align="center">商品</th>
<th align="center">數量</th>
<th align="center">訂單日期</th>
</tr>

<?php
mysql_select_db($database_connQuestion, $connQuestion);
$query = "SELECT order.OrderNumber AS ordercode, Name, Number, OrderTime FROM `order` , `orderdetail` WHERE order.OrderNumber = orderdetail.OrderNumber and Status = 'waiting' and Mailbox = '{$_SESSION['account_name']}'";
$result = mysql_query($query, $connQuestion) or die(mysql_error());
if($row = mysql_fetch_array($result)){
do{
	  echo "<tr><td align='center' class='tdfont'>";
	  echo $row["ordercode"];
	  echo "</td><td align='center' class='tdfont'>";
	  echo $row["Name"];
	  echo "</td><td align='center' class='tdfont'>";
	  echo $row["Number"];
	  echo "</td><td align='center' class='tdfont'>";
	  echo $row["OrderTime"];
	  echo "</td></tr>";
	}while($row = mysql_fetch_array($result));
}else{
	echo "<tr><td colspan='4' align='center' class='tdtotalpricefont'>你沒有尚未處理的訂單</td></tr>";
	}
?>

</table>
</td>
</tr>
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