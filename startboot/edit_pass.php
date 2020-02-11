<?php
require("connect.php");
$sql = "select * from users where name = '".$_POST["id"]."' and password = '".$_POST["passold"]."'";
$rs = $conn->query($sql);
$count = $rs->num_rows;
if($count != 0)
{

//  $sql2 = "select name from users where name = '".$_POST["idcustomer"]."'";
  //$rs2 = $conn->query($sql2);
//  $count2 = $rs2->num_rows;
  if($_POST['newpass'] == $_POST['checkpass'])
  {
    $ps = $_POST['newpass'];
    $id = $_POST['id'];
    $sql1 = "update users set password = '".$ps."' where name ='$id'";
  //  $sql1 = "update project set status = '".$st."', progress = '".$pr."' where name ='$nm'";
    $rs9 = $conn->query($sql1);

    echo "<script>";
    echo "alert('แก้ไขข้อมูลสำเร็จ');";
    echo "window.open(\"index.php\",\"_self\");";
    echo  "</script>";
  }
else {
  echo "<script>";
  echo "alert('กรุณาตรวจสอบรหัสผ่านใหม่ให้ถูกต้อง');";
  echo "window.open('editpass.php?name=".$_POST['id']."')";
  echo  "</script>";
    }

  }
  else {
      echo "<script>";
      echo "alert('กรุณาตรวจสอบรหัสผ่านเดิมให้ถุกต้อง');";
      echo "window.open('editpass.php?name=".$_POST['id']."')";
      //echo "window.open(\"editpass.php\",\"_self\");";
      echo  "</script>";
    }

$conn->close();

 ?>
