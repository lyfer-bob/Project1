<?php
require('connect.php');
 //วนซ้ำข้อมูล 1-12
$sql1 = "SELECT COUNT(status) AS COUNTTB FROM project WHERE status ='กำลังดำเนินการ'";
$sql2 = "SELECT COUNT(status) AS COUNTTB FROM project WHERE status ='ล่าช่า'";
$sql3 = "SELECT COUNT(status) AS COUNTTB FROM project WHERE status ='ยังไม่เริ่มดำเนินการ'";
$sql4 = "SELECT COUNT(status) AS COUNTTB FROM project WHERE status ='เสร็จแล้ว'";

$rs1 = $conn->query($sql1);
$rs2 = $conn->query($sql2);
$rs3 = $conn->query($sql3);
$rs4 = $conn->query($sql4);

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



 ?>
<!DOCTYPE html>
<html>
  <head>

          <!-- Bootstrap Core CSS -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">


            <!-- Fonts จาก auth-- >
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

            <!-- Styles จาก auth -->

        <!-- Custom CSS -->
        <link href="{{ asset('/css/modern-business.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

  </head>
  <body>

    <link href="{{ asset('/css/barchart.css') }}" rel="stylesheet">
    <style type="text/css">
    svg {
      padding-bottom:25px;
      padding-left:100px;
      padding-top:20px;
    }

    g path,
    g line {
      fill: #C0C0C0;
    }

    text {
      fill:#696969;
      font-size:20px;
    }

      }
    </style>
    <form action="">

  <script span  src="//d3js.org/d3.v3.min.js"></script>
  <span style="padding-left:1200px">
  <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
if (window.print) {
document.write('<form>'
+ '<input type=button name=print value="Print" '
+ 'onClick="javascript:window.print()"></form>');
}
// End -->
</script>
<h1 class="page-header" align = 'center'>กราฟแสดงจำนวนโครงการความคืบหน้าในแต่ละปี</h1>
<h5>จำนวนโครงการ</h5>
  </form>
  <script type="text/javascript">
  var w = 600;
  var h = 400;
  var dataset = <?php echo "["."$notwork".","."$working".","."$late".","."$finish"."]"; ?>;
  var barPadding = 40;
  var colors = d3.scale.ordinal().range(['red','orange','yellow','#93C572']);

  var dataSetMax = d3.max(dataset);
  var yVariance = 10;
  var yMax = dataSetMax+(yVariance-(dataSetMax%yVariance));

  //scale + axis stuff
  var xScale = d3.scale.ordinal();
  var yScale = d3.scale.linear();
  xScale.domain(["ยังไม่เริ่มดำเนินการ", "กำลังดำเนินการ", "ล่าช้า", "เสร็จแล้ว"])
  	.rangeRoundBands([-26,w],0.15);
  var xAxis = d3.svg.axis()
  .orient("bottom")
  .scale(xScale);
  yScale.domain([yMax,0])
  	.range([0,h]);
  var yAxis = d3.svg.axis()
  	.orient("left")
  	.scale(yScale)
    .ticks(10);


  //svg creation
  var svg = d3.select("body")
  		.append("svg")
    	.attr("width", w)
    	.attr("height", h)

  //bars
  svg.selectAll("rect") //creating rectangles
  	.data(dataset)
    .enter()
    .append("rect")
    .attr("x", function(d,i){ //bar horizontal position
    	return i * (w/dataset.length);
    })
    .attr("y", function(d) { //bar vertical position
    	return yScale(d);
    })
    .attr("width", w / dataset.length - barPadding) //bar width
    .attr("height", function(d) { //bar height
    	return h - yScale(d);
    })
    .attr("fill", function(d,i) { //bar colors
    	return colors(i);
    })

  //bar number
  svg.selectAll("text")
  	.data(dataset)
    .enter()
    .append("text")
    .text(function(d) {
    	return d;
  	})
    	.attr("x", function(d,i) {
      	return i * (w/dataset.length) + (w / dataset.length - barPadding) / 2;
      })
      .attr("y", function(d) {
      	return yScale(d) - 5;
      })
    .attr("text-anchor", "middle");

  //adds the x-axis
  svg.append("g")
  	.attr("transform", "translate(0,"+ h +")")
    .call(xAxis);

  //adds the y-axis
  svg.append("g")
  	.attr("transform", "translate(-20,0)")
    .call(yAxis);

  </script>
  </body>

</html>
