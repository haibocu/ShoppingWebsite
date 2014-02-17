<meta http-equiv="Content-Type" content="text/html; charset=big5">
<?php
if(!isset($_GET["Product_Name"])||!isset($_SESSION['account_name'])){
	$ERROR_MESG="請在購物車界面操作！";
     echo "<script language=javascript>
            alert('$ERROR_MESG');
			window.location.href='cart.php';
          </script>";
}else{

require_once('Connection/ConnectToDatabase.php');
mysql_select_db($database_connQuestion, $connQuestion);

$selectquery = "SELECT Number FROM cart WHERE Product_Name = '{$_GET["Product_Name"]}' AND Client_Mail = '{$_SESSION['account_name']}'";
$result = mysql_query($selectquery, $connQuestion) or die(mysql_error());
$row = mysql_fetch_array($result);
if($row['Number'] == 1){
$ERROR_MESG="您的商品數量已達下限！如果你想刪除本商品，請按“刪除”鍵";
echo "<script language=javascript>
		alert('$ERROR_MESG') ;
        window.location.href='cart.php';
      </script>";		
}else{
$updateaddone = "UPDATE cart SET Number = Number - 1 WHERE Product_Name = '{$_GET["Product_Name"]}' AND Client_Mail = '{$_SESSION['account_name']}'";
mysql_query($updateaddone, $connQuestion);

echo "<script language=javascript>
        window.location.href='cart.php';
      </script>";
}
}
?>