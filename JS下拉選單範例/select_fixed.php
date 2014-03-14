<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>下拉式選單-固定</title>
</head>

<body>
<form action="" method="post" target="_self"> 
<select name="select" id="select" onChange="this.form.submit()"> 
	<option value="1" >台北</option> 
	<option value="2" >台南</option>
    <option value="3" >高雄</option> 
</select> 
  <SCRIPT> 
	var sel = '<?=$_POST[select]?>'; 
	if (sel==''){ //空值設定預設1選項 
	sel = 1; 	
	}
	select.value = sel; //有值設定為該選項 
	</SCRIPT> 
    <input name="" type="submit" value="送出" />
</form>

</body>
</html>