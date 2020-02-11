 <?php include("layoutadmin.php");
       include("session.php");
       require("connect.php");
 ?>

 <?php
   $st = $_POST["status"];
   $pr = $_POST["progress"];
   $nm = $_POST["name"];


     $sql1 = "update project set status = '".$st."', progress = '".$pr."' where name ='$nm'";
     echo $sql1;

    // $rs1 = $conn->query($sql1);
  if($conn->query($sql1) == TRUE) {




    echo "<script>";
    echo "alert('Update ข้อมูลสำเร็จ');";
    echo "window.open(\"pricing.php?name=".$_POST['name']."\",\"_self\");";
    echo  "</script>";
}
else {
 echo "<script>";
 echo "alert('กรุณาตรวจสอบข้อมูลให้ถูกต้อง');";
 echo "window.open(\"update.php?name=".$_POST['name']."\",\"_self\");";
 echo  "</script>";
}
    $conn->close();
  ?>
