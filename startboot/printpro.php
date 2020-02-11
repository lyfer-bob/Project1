
<?php //include("layoutadmin.php");
      include("session.php");
      require("connect.php");

?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>บริษัท ธารานนท์ คอนสตรัคชั่นดีไซน์ จำกัด</title>

      <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">


        <!-- Fonts จาก auth-- >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:150,300,400,700">

        <!-- Styles จาก auth -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/modern-business.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

                <div class="col-lg-12">
                  <br>
                  <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
if (window.print) {
document.write('<form>'
+ '<span style="padding-left:1500px"><img src="img/print-button.png" width="50" height="50" value="Print" '
+ 'onClick="javascript:window.print()"></form>');
}
// End -->
</script>
                  <span style="padding-left:150px">  <h1 class="page-header"><center>รายงานการรับเหมาแต่ละโครงการ</center></h1>
                </div>

            <br>
            <h2><span style="padding-left:150px">ชื่อโครงการ <span style="padding-left:10px"> : <span style="padding-left:10px"><?php
                    $sql = "select * from project where name = '".$_GET['name']."'";
                    $rs = $conn->query($sql);
                      while($row = $rs->fetch_assoc())
                      {
                      echo  $row['name'];
                      }
              ?></h2>

              <br>
              <h2><span style="padding-left:150px">ชื่อ - สกุล <span style="padding-left:33px"> : <span style="padding-left:10px"><?php
                      $sql = "select * from project where name = '".$_GET['name']."'";
                      $rs = $conn->query($sql);
                        while($row = $rs->fetch_assoc())
                        {
                        echo  $row['namecus'];
                        }
                ?></h2>

                <br>
                <h2><span style="padding-left:150px">รายละเอียด  <span style="padding-left:10px"> : <span style="padding-left:10px"><?php
                        $sql = "select * from project where name = '".$_GET['name']."'";
                        $rs = $conn->query($sql);
                          while($row = $rs->fetch_assoc())
                          {
                          echo  $row['desc'];
                          }
                  ?></h2>

                  <br>
                  <h2><span style="padding-left:150px">วันที่เริ่ม <span style="padding-left:55px"> : <span style="padding-left:10px"><?php
                          $sql = "select * from project where name = '".$_GET['name']."'";
                          $rs = $conn->query($sql);
                            while($row = $rs->fetch_assoc())
                            {
                            echo  $row['timestart'];
                            }
                    ?></h2>

                    <br>
                    <h2><span style="padding-left:150px">วันที่สิ้นสุด <span style="padding-left:21px"> : <span style="padding-left:10px"><?php
                            $sql = "select * from project where name = '".$_GET['name']."'";
                            $rs = $conn->query($sql);
                              while($row = $rs->fetch_assoc())
                              {
                              echo  $row['timestop'];
                              }
                      ?></h2>

        <!-- /.container -->








    <!-- jQuery -->
    <script src="{{ asset('/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
