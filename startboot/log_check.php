<?php
session_start();
require("connect.php");
$sql = "select * from users where name = '".$_POST["id"]."' and password = '".$_POST["pass"]."'";
$rs = $conn->query($sql);
$count = $rs->num_rows;
if($count == 0) {
  echo "<script>";
  echo "alert('กรุณาตรวจสอบชื่อผู้ใช้และรหัสผ่านให้ถูกต้อง');";
  echo "window.open(\"index.php\",\"_self\");";
  echo  "</script>";
}
else {
  while($row = $rs->fetch_assoc())
  {
  $_SESSION["id"] = $_POST["id"];
  $_SESSION["name"] = $_POST["pass"];
	$_SESSION["status"] = $row["status"];
  $_SESSION["pjname"] = $row["pjname"];

			session_write_close();

			if($row["status"] == "admin")
			{

				header("location:pricing.php");
			}
			else
			{

        header("location:user.php?pjname=".$row["pjname"] );
			}
  }
  }
$conn->close();


?>
