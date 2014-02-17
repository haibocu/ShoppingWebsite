<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<div>
<div style="float:left;"><img src="captcha/code.php" width="93" height="38" id="captcha"></div>
<div>Are you a human?<br>
<input type="text" name="Turing" value="" size="10">
[ <a href="#" onclick=" document.getElementById('captcha').src = document.getElementById('captcha').src + '?' + (new Date()).getMilliseconds()">Refresh Image</a> ] [ <a href="/captcha/whatis.html" onClick="window.open('/captcha/whatis.html','_blank','width=400, height=300, left=' + (screen.width-450) + ', top=100');return false;">What's This?</a> ]
</div>
</div>
</body>
</html>