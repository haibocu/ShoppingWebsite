<?php require_once('Connection/ConnectToDatabase.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<!--
<script type="text/javascript">
function turnPage(){
	var page =document.getElementById("search_question").value;
	window.location.href="index.php?page="+page;
}
</script>
-->
<title>Book Delivering</title>
<link rel=stylesheet type="text/css" href="homework.css">
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
if(!isset($_SESSION)){
    session_start();
}
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
<tr height="60">
<td width="800" height="120">
<div id="administration"><img src="file/administration.png" /></div>
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
<td>
<table height="1000" border="1" cellspacing="0">
<tr valign="top">
<td width="150">
<div id="list">

<table cellspacing="15" align="center">
<tr><td colspan="2" class="list">銷售排行榜</td></tr>
<?php
mysql_select_db($database_connQuestion, $connQuestion);
$query = "SELECT * FROM books ORDER BY Sold DESC LIMIT 5";
$result = mysql_query($query, $connQuestion) or die(mysql_error());

for($i=1;$i<=5;$i++){
	echo "<tr height='150'><td>";
	if($row = mysql_fetch_array($result)){
		echo "<table><tr><td class='listnumber'>No.{$i}</td><td rowspan='3'><img src='file/books/{$row["Picture"]}'/></td></tr><tr><td><a href='bookshow.php?id={$row["Name"]}' class='contenta'>{$row["Name"]}</a></td></tr><tr><td class='price'>已售出{$row["Sold"]}件</td></tr></table>";
	}
	echo "</td></tr>";
}
echo "</table>";
?>

</div>
</td>
<td>
<table>
<tr height="950">
<td width="600" valign="top">

<div id="content">
<?php
mysql_select_db($database_connQuestion, $connQuestion);
$query = "SELECT * FROM books";
$result = mysql_query($query, $connQuestion) or die(mysql_error());

//分頁程序1
$row_count = mysql_num_rows($result); 
$page_size=20; 
$page_count = ceil($row_count/$page_size); 

if(empty($_GET['page'])||$_GET['page']<=0||$_GET['page']>$page_count){ 
$page=1; 
}else { 
$page=$_GET['page']; 
for($i = 1;$i <= ($page-1)*$page_size;$i++){
	$row = mysql_fetch_array($result);
	}
} 
//分頁程序1

echo "<table cellspacing='15' align='center'>";
$mark = true;
$mark_number = 0;
while($mark){
	echo "<tr>";
	for($j=1;$j<=5;$j++){
		if($mark_number >= $page_size){
			$mark = false;
			break;
			}
		
		if($row = mysql_fetch_array($result)){
		echo "<td><table><tr><td><a href='bookshow.php?id={$row["Name"]}'>";
echo "<img src='file/books/{$row["Picture"]}'/>";
		echo "</a></td></tr><tr><td class='bookname'><a href='bookshow.php?id={$row["Name"]}' class='contenta'>";
		echo "{$row["Name"]}";
		echo "</a></td></tr><tr><td class='price'>";
		echo "￥"."{$row["Price"]}";
		echo "</td></tr></table></td>";
		$mark_number = $mark_number + 1;
		}else{
			$mark = false;
			break;
			}	
}
	echo "</tr>";
}
echo "</table>";
?>
</div>

</td>
</tr>
<tr height="50">
<td align="center">
<table>
<tr>
<?php
//分頁程序2

if($page != 1){
	echo "<td><a href='index.php?page=1'>首頁</a></td>";
	$page = $page - 1;
	echo "<td><a href='index.php?page=$page'>上一頁</a></td>";
	$page = $page + 1;
	}
echo "<td>第<input type='text' name='PageNumber' value='$page' style='width:30px' maxlength='3' onchange='' disabled/>頁</a></td>";
if($page != $page_count){
	$page = $page + 1;
	echo "<td><a href='index.php?page=$page'>下一頁</a></td>";
	$page = $page - 1;
	echo "<td><a href='index.php?page=$page_count'>最後一頁</a></td>";
	}
echo "<td>共{$page_count}頁</td>";
//分頁程序2
?>
<!--
<td>GO TO<input type="text" name='goto' value="" style="width:30px" maxlength="3" onchange="turnPage()"/></td>
-->
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
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