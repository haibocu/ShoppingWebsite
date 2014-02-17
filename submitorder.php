<meta http-equiv="Content-Type" content="text/html; charset=big5">
<?php
if($_POST["address"] == ""){
	$ERROR_MESG="請輸入送貨地址！";
     echo "<script language=javascript>
            alert('$ERROR_MESG');
			window.location.href='cart.php';
          </script>";
}else{

require_once('Connection/ConnectToDatabase.php');

mysql_select_db($database_connQuestion, $connQuestion);
require_once('application.php');

$selectquery = "SELECT Product_Name, Number FROM cart, books WHERE cart.Product_Name = books.Name and Client_Mail= '{$_SESSION['account_name']}'";
$insertorderquery = "INSERT INTO `order` VALUES ({$ordercode}, '{$_SESSION['account_name']}',{$_POST["totalprice"]},'{$_POST["address"]}', now(), 'waiting') ";

$result = mysql_query($selectquery, $connQuestion) or die(mysql_error());
mysql_query($insertorderquery, $connQuestion);

while($row = mysql_fetch_array($result))
  {
	  $insertorderdetailquery = "INSERT INTO `orderdetail` VALUES ({$ordercode}, '{$row['Product_Name']}', {$row['Number']}) ";
	  $updatebooksold = "UPDATE books SET Sold = Sold + {$row['Number']} WHERE Name = '{$row['Product_Name']}'";
	  $deletecartquery = "DELETE FROM `cart`
WHERE Product_Name = '{$row['Product_Name']}' AND Client_Mail = '{$_SESSION['account_name']}'";
mysql_query($insertorderdetailquery, $connQuestion);
mysql_query($updatebooksold, $connQuestion);
mysql_query($deletecartquery, $connQuestion);
  }

$success_message="訂單確認成功！";
echo "<script language=javascript>
		alert('$success_message') ;
        window.location.href='order.php';
      </script>";
}
?>