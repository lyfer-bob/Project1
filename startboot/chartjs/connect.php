<?php

$conn = new mysqli("localhost","root","","dbproject")
	or die ("Can't connect to DB Server.");
	mysqli_set_charset($conn, "utf8");
	mysql_query("SET NAMES UTF8");
?>
