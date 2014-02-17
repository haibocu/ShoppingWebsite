<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>關於我們</title>
<link rel=stylesheet type="text/css" href="homework.css">
<style type="text/css">
p {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: #03F;
}
li {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 16px;
	color: #000;
}
.board {
	width: 500px;
	margin-right: 20px;
	margin-left: 20px;
}
</style>
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
<td width="800" height="600" background="file/about.png">
<!--在這裡添加關於我們的文章-->
<div class="board">
<br /><br /><br /><br /><br /><br /><br />
<p>
一．網站宗旨：
</p>
<ul><li>
傳承二手書店秉承服務學生、服務大眾、節約環保、互利共贏的原則為廣大學生和市民提供優質的二手書交易平台服務。
</li></ul>
<p>
二．運營單位：
</p>
<ul><li>
華南理工大學2010級電子商務系
</li></ul>
<p>
三．服務對象：
</p>
<ul><li>
華南理工大學大學部學生及社會上需要相關教材人士。
</li></ul>
<p>
四．操作細則：
</p>
<ol>
<li>
買家在線上訂購前請首先登錄帳號以識別個人身份。
</li>
<li>
買家按照正常的網購流程把商品放入購物車、訂單確認、結算。
</li>
<li>
校內訂購的書籍會在一天內送達，請留意簡訊收貨通知。
</li>
<li>
校外訂購的書籍會通過快遞或郵寄的方式由第三方物流公司在三個工作日內送達，買方購買當天發貨。
</li>
<li>
具體的責任條款請瀏覽《傳承二手書店責任與免責聲明》。
</li>
</ol>
</div>
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