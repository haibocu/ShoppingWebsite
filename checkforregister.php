<?php
if(!isset($_SESSION)){
    session_start();
}
$Code = $_REQUEST["checknumber"]; 
if (!isset($_SESSION['turing_string'])||($_SESSION['turing_string']) != strtoupper($Code)){
	$ERROR_MESG = "Sorry, the verification code is not correct. Please enter again!";
    echo "<script language=javascript>
             alert('$ERROR_MESG') ;
             window.location.href='register.php';
          </script>";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<?php require_once('Connection/ConnectToDatabase.php');
?>
<?php
$mark = 0;
if($_POST["password1"] ==null || $_POST["password1"] != $_POST["password2"]){
	$ERROR_MESG = "密碼不一致或沒有輸入密碼";
	$mark = 1;
	}
if($_POST["name"] == null){
	$ERROR_MESG = "請輸入你的暱稱";
	$mark = 1;
	}
if($_POST["mailbox"] == null){
	$ERROR_MESG = "請輸入你的郵箱地址";
	$mark = 1;
	}
if($mark == 1){
	echo "<script language=javascript>
             alert('$ERROR_MESG') ;
             self.history.go(-1) ;
          </script>";
	}else{
mysql_select_db($database_connQuestion, $connQuestion);
$query = "insert into client_data (Name, Mailbox, Gender, Password)
VALUES
('{$_POST['name']}','{$_POST['mailbox']}','{$_POST['gender']}','{$_POST['password1']}')";
if(!mysql_query($query, $connQuestion)){
	die('Error: ' . mysql_error());
	}else{
if(!isset($_SESSION)){
    session_start();
}
$_SESSION["account_name"]=$_POST["mailbox"];
$register_successful_message = "恭喜你，註冊成功！";
     echo "<script language=javascript>
alert('$register_successful_message') ;
self.history.go(-2) ;
          </script>";
		}
}
?>
<html>
<body>
</body>
</html>