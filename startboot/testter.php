<?php include("session.php");
      include("layoutadmin.php");
      require("connect.php");
      $sql = "select * from image where name = '" . $_GET['name']."'";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<!-- Page Content -->
<div class="container">

  <form name="sentMessage" id="contactForm" method="get" action="update.php"
    enctype="multipart/form-data" >

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">

                  <h1 class="page-header"><?php echo  $_GET["name"]; ?>
                    <?php
                echo "<a class='btn btn-primary' href='update.php?name=".$_GET["name"]."'>ความคืบหน้า</i></a>";
                ?>

                  </h1>


       <!--  แท็บใต้หัวข้อ
           <ol class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li class="active">One Column Portfolio</li>
            </ol> -->
        </div>
    </div>
    <!-- /.row -->

    <!-- Project One -->
                    <h2>กำหนดการ</h2>
                     <h4> วันที่เริ่มทำ :
                          <?php
                          $st1 = "select timestart from project where name = '".$_GET['name']."'";
                          $rs = $conn->query($st1);
                          if($rs->num_rows > 0)
                          {
                            while($row = $rs->fetch_assoc())
                            {
                              $date = $row['timestart'];
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

                            }
                          }
                           ?>
                        <span style="padding-left:200px">วันที่สิ้นสุด :
                          <?php
                          $st1 = "select timestop from project where name = '".$_GET['name']."'";
                          $rs = $conn->query($st1);
                          if($rs->num_rows > 0)
                          {
                            while($row = $rs->fetch_assoc())
                            {
                              $date = $row['timestop'];
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

                            }
                          }
                         ?></span>
                     </h4>
                     <br>
                     
    <?php
              $sql = "select * from image where name = '" . $_GET['name']."' order by time DESC";
              $rs = $conn->query($sql);
              while ($row = $rs->fetch_assoc())
              {
                echo "<div class='row'>";
                echo "<div class='col-md-7'>";
                echo "<img class='img-responsive img-hover' src='pic/".$row['image']."'  border='0' width='700' height='300'
                onclick='zoomToggle('700px','300px','1000px','600px',this);'>";
                echo "</a>";
                echo "</div>";
                echo "<div class='col-md-5'>";
                echo "<h3>".$row['heading']."</h3>";
                echo "<p>".$row['text']."</p>";
                echo "</div>";
                echo "</div>";
                echo "<hr>";
              } ?>
              <!--
    <div class="row">
        <div class="col-md-7">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="img/test4.png" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>ระยะที่ 1 </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
            ปุ่ม view project สีน้ำเงิน
      <a class="btn btn-primary" href="portfolio-item.html">View Project</i></a>
        </div>
    </div>


    <hr>


    <div class="row">
        <div class="col-md-7">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">


            <h4>Subheading</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
            <a class="btn btn-primary" href="portfolio-item.html">View Project</i></a>
        </div>
    </div>


    <hr>


    <div class="row">
        <div class="col-md-7">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Project Three</h3>
            <h4>Subheading</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
            <a class="btn btn-primary" href="portfolio-item.html">View Project</i></a>
        </div>
    </div>


    <hr>


    <div class="row">

        <div class="col-md-7">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Project Four</h3>
            <h4>Subheading</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
            <a class="btn btn-primary" href="portfolio-item.html">View Project</i></a>
        </div>
    </div>


    <hr>


    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Project Five</h3>
            <h4>Subheading</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident ex quisquam hic odio repellendus atque porro distinctio quae id laboriosam facilis dolorum.</p>
            <a class="btn btn-primary" href="#">View Project</i></a>
        </div>
    </div>


    <hr>


    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>


    <hr>


    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
 /.container -->

<!-- /.zoomin/out picture -->
<script>
var nW,nH,oH,oW;
function zoomToggle(iWideSmall,iHighSmall,iWideLarge,iHighLarge,whichImage){
oW=whichImage.style.width;oH=whichImage.style.height;
if((oW==iWideLarge)||(oH==iHighLarge)){
nW=iWideSmall;nH=iHighSmall;}else{
nW=iWideLarge;nH=iHighLarge;}
whichImage.style.width=nW;whichImage.style.height=nH;
}
</script>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</form>
</body>

</html>
