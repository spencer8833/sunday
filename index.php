<?php
	echo "<form action=. method=POST>";
	echo "ID:<input type=text name=id><br/>";
	echo "Password:<input type=password name=pwd><br/>";
	echo "<input type=submit value=submit>";
	echo "</form>";
	$id = $_POST["id"];
	$pwd = $_POST["pwd"];
	mysql_connect("localhost","root","D10116232");
	mysql_select_db("sun_member");
	echo $id;
	echo $pwd;
	$str = "select * from sun_member";
	$result = mysql_query($str);
	echo count(mysql_fetch_array($result));
?>