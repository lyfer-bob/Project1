<?php
require('connect.php');


//$array = array(1, "hello", 1, "world", "hello");
//print_r(array_count_values($array));

//$sql = "select status from project where name = '".$_POST["id"]."' and password = '".$_POST["passold"]."'";
$sql1 = "SELECT COUNT(status) AS COUNTTB FROM project WHERE status ='กำลังดำเนินการ'";
$sql2 = "SELECT COUNT(status) AS COUNTTB FROM project WHERE status ='ล่าช่า'";
$sql3 = "SELECT COUNT(status) AS COUNTTB FROM project WHERE status ='ยังไม่เริ่มดำเนินการ'";
$sql4 = "SELECT COUNT(status) AS COUNTTB FROM project WHERE status ='เสร็จแล้ว'";

$rs1 = $conn->query($sql1);
$rs2 = $conn->query($sql2);
$rs3 = $conn->query($sql3);
$rs4 = $conn->query($sql4);
//$count = $rs->num_rows;
  while($row = $rs1->fetch_assoc())
  {
    $working = $row['COUNTTB'];


  }
  while($row = $rs2->fetch_assoc())
  {
    $late = $row['COUNTTB'];


  }
  while($row = $rs3->fetch_assoc())
  {
    $working = $row['COUNTTB'];


  }
  while($row = $rs4->fetch_assoc())
  {
    $finish = $row['COUNTTB'];

  }


    $date = date("Y-m-d");
    $Newdate = explode("-",$date);
    $year = $Newdate['0']+543;
    $month = $Newdate['1'];
    if ($month == '1') {
      $month = "มกราคม";
    }
    elseif ($month == '2') {
      $month = "กุมภาพันธ์";
    }
    elseif ($month == '3') {
      $month = "มีนาคม";
    }
    elseif ($month == '4') {
      $month = "เมษายน";
    }
    elseif ($month == '5') {
      $month = "พฤษภาคม";
    }
    elseif ($month == '6') {
      $month = "มิถุนายน";
    }
    elseif ($month == '7') {
      $month = "กรกฎาคม";
    }
    elseif ($month == '8') {
      $month = "สิงหาคม";
    }
    elseif ($month == '9') {
      $month = "กันยายน";
    }
    elseif ($month == '10') {
      $month = "ตุลาคม";
    }
    elseif ($month == '11') {
      $month = "พฤศจิกายน";
    }
    elseif ($month == '12') {
      $month = "ธันวาคม";
    }
    $day = $Newdate['2'];
    echo $day."/".$month."/".$year;






 ?>
