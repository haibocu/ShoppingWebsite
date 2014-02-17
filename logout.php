<meta http-equiv="Content-Type" content="text/html; charset=big5">
<?php
	if(!isset($_SESSION)){
    	session_start();
	}
	session_destroy();
	echo "<script language=javascript>
             self.history.go(-1) ;
          </script>";
?>