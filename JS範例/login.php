<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="login.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登入測試</title>
</head>
<style></style>
<body>
<center>

<table align="center">
	<tr>
    	<td>帳號：<input type="text" id="user"/></td>
    </tr>
	<tr>
    	<td>密碼：<input type="text" id="pass"/></td>
    </tr>
	<tr>
    	<td><input type="button" value="登入" id='submit' onclick='login();'/></td>
    </tr>
</table>
<div id="error"></div>
</center>
</body>
</html>