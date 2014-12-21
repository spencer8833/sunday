<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>	
<head>
	<meta charset="UTF-8">
	<link rel = "stylesheet" type="text/css" href="css/reset.css"/>
	<link rel = "stylesheet" type="text/css" href="css/login_style.css"/>
	<Title>practice</Title>
</head>

<body>
<?php
	echo "<div id=main>";
	echo "<div id=loginmain>";
	echo "<form action=. method=POST>";
	echo "E-mail:<input type=text name=id>";
	echo "Password:<input type=password name=pwd>";
	echo "<input type=hidden name=phptype value=1>";
	echo "<input type=submit value=submit>";
	echo "</form>";	
	$phptype = $_POST["phptype"];
	$id = $_POST["id"];
	$pwd = $_POST["pwd"];	
	if($phptype == 1){
		mysql_connect("localhost","root","takming");
		mysql_select_db("D10116232sql");
		$str = "select * from sun_member where email='$id' and password='$pwd'";
		$result = mysql_query($str);
		if (mysql_num_rows($result) == 1){			
			$_SESSION["loginid"] = mysql_result($result,0,4);
			echo "登入成功!";
		}else{
			echo "帳號或密碼有誤!";}
	}
	if(isset($_SESSION["loginid"])) echo "email=".$_SESSION["loginid"];
	echo "</div>";
	echo "<div id=registermain>";
	echo "hello!";
	echo "</div>";
	echo "</div>"
?>
<body>

</html>