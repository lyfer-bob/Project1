<?php
require("connect.php");
/*$sql1 = "select b_id from branch where b_name = '".$_POST["b_name"]."'";
$rs1 = $conn->query($sql1);
while($row = $rs1->fetch_assoc())
    {
      $bid = $row["b_id"];
    }*/

$sql = "select name from project where name = '".$_POST["name"]."'";
$rs = $conn->query($sql);
$count = $rs->num_rows;
if($count == 0)
{
  $sql2 = "select name from users where name = '".$_POST["idcustomer"]."'";
  $rs2 = $conn->query($sql2);
  $count2 = $rs2->num_rows;
  if($count2 == 0)
  {
    $date1 = $_POST['timestart'];
    $date2 = $_POST['timestop'];



    $arrDate1 = explode("-",$date1);
    $arrDate2 = explode("-",$date2);
    $timStmp1 = mktime(0,0,0,$arrDate1[1],$arrDate1[2],$arrDate1[0]);
    $timStmp2 = mktime(0,0,0,$arrDate2[1],$arrDate2[2],$arrDate2[0]);

    if ($timStmp1 < $timStmp2) {


//  $ss = $_FILES["image"]["name"];
//  echo "esud = ".$ss;
   $pr = '0';
    $sql1 = "insert into project (name,idcus,progress,tel,email,desc,status,namecus,address,timestart,timestop) values
     ('".$_POST["name"]."','".$_POST["idcustomer"]."','".$pr."','".$_POST["tel"]."','".$_POST["email"]."','".$_POST["desc"]."','".$_POST["status"].
     "','".$_POST["namecus"]."','".$_POST["address"]
     ."','".$_POST["timestart"]."','".$_POST["timestop"]."')";
    $rs1 = $conn->query($sql1);
  //  echo $sql1;
    $sql4 = "insert into users (name,password,pjname,address,namecus,status) values
    ('".$_POST["idcustomer"]."','".$_POST["tel"]."','".$_POST["name"]."','".$_POST["address"].
    "','".$_POST["namecus"]."','".$_POST["statususer"]."')";
    //echo $sql4;
    $rs4 = $conn->query($sql4);


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

}
else {
  echo "<script>";
  echo "alert('กรุณาตรวจสอบ ID ลูกค้าให้ถูกต้อง');";
  echo "window.open(\"addproject.php\",\"_self\");";
  echo  "</script>";
    }

  }
  else {
      echo "<script>";
      echo "alert('กรุณาตรวจสอบชื่อโปรเจคให้้ถูกต้อง');";
      echo "window.open(\"addproject.php\",\"_self\");";
      echo  "</script>";
    }
/*if(move_uploaded_file($_FILES["image"]["tmp_name"],"C:/xampp/htdocs/startboot/pic/".$_FILES["image"]["name"]))
  {
    $i = 1;
    $image = $_FILES['image']['name'];
    $sql4 = "INSERT INTO image  (image,text,id,name,time,heading) VALUES ('".$_FILES["image"]["name"]." ','".$_POST["comment"].
    "','".$i."','".$_POST["name"]."','".now()."','".$_POST["heading"]."')";
    echo $sql4;

    $rs4 = $conn->query($sql4);
  	$sql3 = "update project SET image = '".$_FILES["image"]["name"]."' where name = '" .$_POST["name"]."'";
  	$rs3 = $conn->query($sql3);
  }*/


/*
$strSQL = "INSERT INTO customer ";
$strSQL .="(Date) ";
$strSQL .="VALUES ";
$strSQL .="(NOW())";
$rs6 = $conn->query($strSQL);
if($rs6)
{
	echo "Save Done.";
}
else
{
	echo "Error Save [".$strSQL."]";
}
*/


$conn->close();
/*
$strSQL = "insert INTO product ";
    			$strSQL .="(p_name,p_type,p_cost,p_amount,p_date,p_pic) ";
    			$strSQL .="VALUES ";
    			$strSQL .="('".$_POST["p_name$i"]."','".$_POST["p_type$i"]."', ";
    			$strSQL .="'".$_POST["p_cost$i"]."' ";
    			$strSQL .=",'".$_POST["p_amount$i"]."','".$date1."','".$_POST["p_pic$i"]."')";  // $_POST["p_pic"]<< อันนี้รับชื่อรูปมาจากฟอมเพิ่มสินค้ายัดลงดาต้าเบส เช่นส่งชื่อ 1.jpg มา ก็เก็บเป็น 1.jpg
    			$rs1 = $conn->query($strSQL);
					$sql2 = "select p_id from product where p_name = '".$_POST["p_name$i"]."' and p_cost = '".$_POST["p_cost$i"]."' and p_date = '".$date1."'";
					$rs2 = $conn->query($sql2);
					while($row2 = $rs2->fetch_assoc())
					{
						$p = $row2["p_id"];
          if(move_uploaded_file($_FILES["p_pic$i"]["tmp_name"],"C:/xampp/htdocs/startboot/pic".$_FILES["p_pic$i"]["name"]))   // อันนี้ย้ายรูปไปเก็บในโฟลเดอร์ที่เลือก ตรง c:/appserv อะไรนั่นอะ
            {
            	$sql3 = "update product SET p_pic = '".$_FILES["p_pic$i"]["name"]."' where p_id = '" .$row2["p_id"]. "'";
            	$rs3 = $conn->query($sql3);
							}
            }*/
 ?>
