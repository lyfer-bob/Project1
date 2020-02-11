<?php
session_start();
session_unset();
echo "<script>";

echo "window.open(\"/startboot/index.php\",\"_self\");";
echo "</script>";

 ?>
