<?php
session_start();
            if($_SESSION['id'] == "")
  {
    echo "<script>";
    echo "alert('กรุณาล็อกอินเข้าสู่ระบบ');";
    echo "window.open(\"/startboot/index.php\",\"_self\");";
    echo  "</script>";
  }
 ?>
