<?php
      require("connect.php");

    //UPDATE STATUS late

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
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <link href="css/login.css" rel="stylesheet">


    <form  class="form-horizontal" name="priceOptionForm" role="form" method="POST" action="log_check.php">

    <div class="modal-content">
            <div class="modal-header">
              <h1 class="text-center">Welcome</h1>
            </div>
             <div class="modal-body">
                 <div class="form-group">
                     <input type="text" class="form-control input-lg" placeholder="ID" name="id" id='id_of_textbox' />
                 </div>

                 <div class="form-group">
                     <input type="password" class="form-control input-lg" placeholder="Password" id='id_of_textbox' name="pass"/>
                 </div>

                 <div class="form-group">
                     <input type="submit" class="btn btn-block btn-lg btn-primary"    onkeydown="submitForm" value="Login"/>
                   </form>
                     <span class="pull-right"><!--<a href="#">Register</a></span> ส่วนของ Register-->
                 </div>
             </div>
        </div>
<script type="text/javascript">
function submitForm(){
    document.priceOptionForm.submit();
    document.priceOptionForm.method='post';
}
</script>

  </body>

</html>
