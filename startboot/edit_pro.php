<?php
require("connect.php");
/*$sql1 = "select b_id from branch where b_name = '".$_POST["b_name"]."'";
$rs1 = $conn->query($sql1);
while($row = $rs1->fetch_assoc())
    {
      $bid = $row["b_id"];
    }*/



    $date1 = $_POST['timestart'];
    $date2 = $_POST['timestop'];



    $arrDate1 = explode("-",$date1);
    $arrDate2 = explode("-",$date2);
    $timStmp1 = mktime(0,0,0,$arrDate1[1],$arrDate1[2],$arrDate1[0]);
    $timStmp2 = mktime(0,0,0,$arrDate2[1],$arrDate2[2],$arrDate2[0]);

    if ($timStmp1 < $timStmp2) {


//  echo "esud = ".$ss;
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $namecus = $_POST['namecus'];
    $add = $_POST['address'];
    $eamil = $_POST['email'];
    $start = $_POST['timestart'];
    $stop = $_POST['timestop'];
    $idcus = $_POST['idcustomer'];

    $sql1 = "UPDATE project
    SET name = '".$name."',"."tel = '".$tel."',"." namecus = '".$namecus."',"." address = '".$add."',"." timestart = '".$start."',"."
               timestop = '".$stop."'"." where idcus = '".$idcus."'";

    $sql2 =  "UPDATE users
    SET pjname = '".$name."'"."where name = '".$idcus."'";

    $rs1 = $conn->query($sql1);
    $rs2 = $conn->query($sql2);

    echo "<script>";
    echo "alert('เพิ่มข้อมูลสำเร็จ');";
    echo "window.open(\"pricing.php\",\"_self\");";
    echo  "</script>";
  }

  else if ($timStmp1 == $timStmp2) {
    echo "<script>";
    echo "alert('เวลาที่เริ่มและสิ้นสุดเหมือนกัน กรุณากรอกใหม่');";
    echo "window.open(\"addproject.php\",\"_self\");";
    echo  "</script>";
  } else if ($timStmp1 > $timStmp2) {
    echo "<script>";
    echo "alert('เวลาที่เริ่มมากกว่าเวลาที่สิ้นสุด กรุณากรอกใหม่');";
    echo "window.open(\"addproject.php\",\"_self\");";
    echo  "</script>";

  }





$conn->close();

 ?>
