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
$sql = "SELECT status,number FROM chart";
//จบ sql
$result = mysql_query($sql);
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


        <script>
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'จำนวนโครงการ'
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
     $number = $row['number'];
               $sss = "['".$status."',".$number."],";
      echo $sss;
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
