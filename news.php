<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>最新消息</title>
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
h1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #F00;
	text-align: center;
	vertical-align: middle;
	font-weight: bold;
}
.board {
	text-align: left;
	width: 760px;
	margin-right: 20px;
	margin-left: 20px;
}
h2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #F96;
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
<td width="800" height="1200">
<!--在這裡添加關於我們的文章-->
<div class="board">
<br />
<h1>傳承二手書店圖書回收活動通知</h1>
<br />
<h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
為了提倡節能環保的意識、推動書籍的循環再利用行動，本店擬於2013年6月20日至8月20日期間舉行面向廣大師生及社會各界人士的回收二手書籍活動，期盼大家的熱情參與。
以下是本次活動的相關注意事項：
</h2>
<p>
一.遞送方法
</p>
<ol><li>華南理工大學的師生可在活動期間週一至週五9：00～11：30  13：00～17：00把回收書籍拿到本書店工作室。工作室地址：華南理工大學南校區C7樓101室  華南理工大學北校區1號樓214室。
</li>
<li>校外人士可通過郵政或物流公司郵寄的方式進行寄送。寄送的郵費由本書店支付，但不含包裝費。郵寄前請務必將書妥善包好，寄往以下地址：廣東省廣州市番禺區廣州大學城華南理工大學C7樓101室。郵政編號：510006
</li>
<li>廣州大學城範圍內的人士，十本以上（含十本）可以提供免費上門回收服務。
</li>
</ol>
<p>
二.本店對二手書的定義
</p>
<ul><li>
全新書：沒有被翻閱過的新書；
</li>
<li>
九成新書：被看過，但是看上去仍然是新的書，且沒有劃痕；
</li>
<li>
（注意：本書店不回收盜版書籍）
</li>
</ul>
<p>
三.本店收書的種類
</p>
<ul><li>
華南理工大學大學部教材
</li>
<li>
計算機類書籍
</li>
<li>
自考書
</li>
<li>
期刊雜誌
</li>
<li>
文學、小說類書籍
</li>
<li>
漫畫、少兒類書籍
</li>
<li>
本店在賣的其它書籍種類
</li>
</ul>
<p>
四.本店對以上圖書的回收價（暫定）
</p>
<ol>
<li>
普通書的收購
<ul>
<li>
全新書：1.5折
</li>
<li>
九成新書：1折
</li>
<li>
期刊雜誌：1折
</li>
<li>
(八成新及以下的書：暫時不收)
</li>
<li>
90年以前出版的書籍，請聯繫QQ：123456789 或撥打12345678901直接洽談。
</li>
</ul>
</li>
<li>
如果你有一些比較好的暢銷書，價格可以另議。
</li>
</ol>
<p>
五.收購辦法（暫定）
</p>
<ul><li>
請您把書籍寄送給我們後，提供您的銀行帳號或匯款地址。收到書籍後，我們將在三個工作日內將錢匯送到上述銀行帳號或匯款地址。請您在郵寄書之前先通過電話或者QQ聯繫本書店，以判定你的書屬於幾類書，並算出價格。
聯繫方式有以下幾種：
<ul>
<li>
電話聯繫：12345678901；12345678902
</li>
<li>
電子郵件：1234567@qq.com
</li>
<li>
QQ號：1234567
</li>
</ul>
</li></ul>
<p>
六.免責條款
</p>
<ul><li>
請您如實報告你的書況和價格，書到後我們會進行複查。如於協商內容不符，我們會按實際價格付款，用戶不得有異議。本書店保留本次活動的一切解釋權。
</li>
</ul>
<p>
七.包裹方法
</p>
<ul><li>
先用繩子捆好；再用紙箱裝好，外面多加點透明膠布。
</li>
</ul>
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