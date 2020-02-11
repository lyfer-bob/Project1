<?php
require('connect.php');

/*
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
    $sql5 = "UPDATE chart SET number = '".$working."' WHERE status = 'กำลังดำเนินการ'";
    $rs5 = $conn->query($sql5);



  while($row = $rs2->fetch_assoc())
  {
    $late = $row['COUNTTB'];
  }
  $sql6 = "UPDATE chart SET number = '".$late."' WHERE status = 'ล่าช้า'";
  $rs6 = $conn->query($sql6);


  while($row = $rs3->fetch_assoc())
  {
    $notwork = $row['COUNTTB'];
  }
  $sql7 = "UPDATE chart SET number = '".$notwork."' WHERE status = 'ยังไม่เริ่มดำเนินการ'";
  $rs7 = $conn->query($sql7);


  while($row = $rs4->fetch_assoc())
  {
    $finish = $row['COUNTTB'];

  }
  $sql8 = "UPDATE chart SET number = '".$finish."' WHERE status = 'เสร็จแล้ว'";
  $rs8 = $conn->query($sql8);

*/
 ?>

<?php
  //include("session.php");
$host = "localhost";
$user = "root";
$pwd = "";
$db = "dbproject";
global $link;
$link = mysql_connect($host,$user,$pwd) or die ("Could not connect to MySQL");
mysql_query("SET NAMES UTF8",$link);
mysql_select_db($db,$link) or die ("Could not select $db database");
//sql สำหรับดึงข้อมูล จาก jhcis
//$sql = "SELECT status,number FROM chart";
$sql = "SELECT COUNT(progress) AS COUNTTB,status FROM project WHERE progress >=80 and status = 'กำลังดำเนินการ'";
$sql1 = "SELECT COUNT(progress) AS COUNTTB,status FROM project WHERE progress >=80 and status = 'เสร็จแล้ว'";
$sql2 = "SELECT COUNT(progress) AS COUNTTB,status FROM project WHERE progress >=80 and status = 'ล่าช้า'";
//$sql3 = "SELECT COUNT(progress) AS COUNTTB,status FROM project WHERE progress >1 and status = 'กำลังดำเนินการ'";
//จบ sql
$result = mysql_query($sql);
$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);
?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Highcharts Example</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script src="http://code.highcharts.com/modules/exporting.js"></script>

    </head>
    <body>
      <form class="" method="post">

      <div id="container" style="min-width: 320px; height: 380px; margin: 0 auto">
          <input type="text" name="" value="">
          <input type="text" name="" value="">
          <input type="button" name="" value="">
          <input type="button" name="" value="">
        <script>
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'เปอร์เซนต์โครงการที่เสร็จมากกว่า 80%'
        },
        tooltip: {
         pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'service',
            data: [
   <?php
   while($row=mysql_fetch_array($result)) {
     $status = $row['status'];
     $number = $row['COUNTTB'];
    // $number2 = intval($number);
  //   $number2 = $number2 *10;
      $sss = "['".$status."',".$number."],";
      echo $sss;

   }
   ?>

   <?php
   while($row=mysql_fetch_array($result1)) {
     $status1 = $row['status'];
     $number1 = $row['COUNTTB'];
    // $number2 = intval($number);
  //   $number2 = $number2 *10;
      $sss1 = "['".$status1."',".$number1."],";
      echo $sss1;

   }
   ?>

   <?php
   while($row=mysql_fetch_array($result2)) {
     $status2 = $row['status'];
     $number2 = $row['COUNTTB'];
    // $number2 = intval($number);
  //   $number2 = $number2 *10;
      $sss2 = "['".$status2."',".$number2."],";
      echo $sss2;

   }
   ?>


            ]
        }]
    });
});
        </script>


      </div>
      </form>
    </body>
</html>
