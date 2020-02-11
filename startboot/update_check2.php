 <?php include("layoutadmin.php");
       include("session.php");
       require("connect.php");
 ?>

 <?php

 if(move_uploaded_file($_FILES["image"]["tmp_name"],"C:/xampp/htdocs/startboot/pic/".$_FILES["image"]["name"]))
   {
    /* $image = $_FILES['image']['name'];
   	$sql3 = "update project SET image = '".$_FILES["image"]["name"]."' where name = '" .$_POST["name"]."'";
    echo $sql3;*/
   //	$rs3 = $conn->query($sql3);
    $sql4 = "insert into image (name,image,text,heading) values
     ('".$_POST["name"]."','".$_FILES["image"]["name"]."','".$_POST["comment"]."','".$_POST["heading"]."')";
       echo $sql4;
//    $rs4 = $conn->query($sql4);
    if($conn->query($sql4) == TRUE)
    {
      echo "<script>";
          echo "alert('Update ข้อมูลสำเร็จ');";
          echo "window.open(\"update.php?name=".$_POST['name']."\",\"_self\");";
          echo  "</script>";

    }
    else {
     echo "<script>";
     echo "alert('กรุณาตรวจสอบข้อมูลให้ถูกต้อง');";
     echo "window.open(\"update.php?name=".$_POST['name']."\",\"_self\");";
     echo  "</script>";

   }


}
    $conn->close();
  ?>
