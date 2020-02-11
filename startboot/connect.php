<?php

$conn = new mysqli("localhost","root","","dbproject")
	or die ("Can't connect to DB Server.");
	mysqli_set_charset($conn, "utf8");
	mysql_query("SET NAMES UTF8");
	
	$date1 = date("Y-m-d");
//  $time = date("H:i:s");
	$sql11 = "select timestop,name from project";
	$rsss = $conn->query($sql11);
	while($row = $rsss->fetch_assoc())
	{
		$date1 = date("Y-m-d");
		$date2 = $row['timestop'];


	$arrDate1 = explode("-",$date1);
	$arrDate2 = explode("-",$date2);
	$timStmp1 = mktime(0,0,0,$arrDate1[1],$arrDate1[2],$arrDate1[0]);
	$timStmp2 = mktime(0,0,0,$arrDate2[1],$arrDate2[2],$arrDate2[0]);


		$sql32 = "update project set status = 'ล่าช้า' where ".$timStmp1.' > '.$timStmp2." and name = '".$row['name']."'";
		$rssss = $conn->query($sql32);
	}
?>
