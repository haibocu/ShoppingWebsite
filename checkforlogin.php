<meta http-equiv="Content-Type" content="text/html; charset=big5">
<?php require_once('Connection/ConnectToDatabase.php');
?>
<?php
mysql_select_db($database_connQuestion, $connQuestion);

$clientquery = "SELECT Password FROM client_data where Mailbox= '{$_POST['account']}'";
$clientresult = mysql_query($clientquery, $connQuestion) or die(mysql_error());
while($clientrow = mysql_fetch_array($clientresult))
  {
	  $clientpassword = $clientrow['Password'];
  }

$managerquery = "SELECT Password FROM manager where Mailbox= '{$_POST['account']}'";
$managerresult = mysql_query($managerquery, $connQuestion) or die(mysql_error());
while($managerrow = mysql_fetch_array($managerresult))
  {
	  $managerpassword = $managerrow['Password'];
  }

$mark = 0;
if (isset($clientpassword) && $clientpassword == $_POST["password"])
{
	$mark = 1;
}
if (isset($managerpassword) && $managerpassword == $_POST["password"])
{
	$mark = 2;
}
if($mark == 1){
	if(!isset($_SESSION)){
    	session_start();
	}
	$_SESSION['account_name']=$_POST["account"];
	echo "<script language=javascript>
          self.history.go(-2) ;
          </script>";
     //header("location: index.php");
}elseif($mark == 2){
	if(!isset($_SESSION)){
    	session_start();
	}
	$_SESSION['account_name']=$_POST["account"];
	echo "<script language=javascript>
          window.location.href='manage.php';
          </script>";
}else{
     $ERROR_MESG="帳號或密碼錯誤,請重新登入!!";
     echo "<script language=javascript>
             alert('$ERROR_MESG') ;
             self.history.go(-1) ;
          </script>";
  }
?>