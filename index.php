<!DOCTYPE HTML>
<html>	
<head>
	<Title>practice</Title>
</head>

<body>
<form action=. method=POST>
	ID:<input type=text name=id><br/>
	Password:<input type=password name=pwd><br/>
	<input type=hidden name=phptype value=1>
	<input type=submit value=submit>
</form>
<?php
	$phptype = $_POST["phptype"];
	$id = $_POST["id"];
	$pwd = $_POST["pwd"];	
	if($phptype == 1){
		mysql_connect("localhost","root","D10116232");
		mysql_select_db("D10116232sql");
		$str = "select * from sun_member where email='$id' and password='$pwd'";
		$result = mysql_query($str);
		if (mysql_num_rows($result) == 1)
			echo "登入成功!";
			else
			echo "帳號或密碼有誤!";
	}	
?>
<body>

</html>