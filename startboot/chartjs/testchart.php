<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>easy chart</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>



</head>
<body>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">
	<!-- ตั้งค่า -->
	<script type="text/javascript">
	$(function () {
	    $('#container').highcharts({
	        //ชื่อกราฟ
	        title: {
	            text: 'กราฟแสดงข้อมูลจำนวนโครงการในแต่ละปี ',
	            x: -20 //center
	        },
	        subtitle: {
	            text: '',
	            x: -20
	        },
	        //แนวนอน
	        xAxis: {
	            /*categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
	                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']*/
	                categories: ['ยังไม่เริ่มดำเนินการ', 'กำลังดำเนินการ', 'ล่าช้า', 'เสร็จแล้ว ']

	        },
	        //ชื่อข้อมูลแนวตั้ง
	        yAxis: {
	            title: {
	                text: 'จำนวนโครงการทั้งหมดในแต่สถานะ'
	            },
	            plotLines: [{
	                value: 0,
	                width: 1,
	                color: '#808080'
	            }]
	        },
	        tooltip: {
	            valueSuffix: '%'
	        },
	        legend: {
	            layout: 'vertical',
	            align: 'right',
	            verticalAlign: 'middle',
	            borderWidth: 0
	        },
	        series: [{
	        //     name: 'Tokyo',
	        //     data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
	        // }, {
	            name: '2018',
	            data: [
	            <?php  //วนซ้ำข้อมูล 1-12
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
								echo $working;
						    echo ',';


						  while($row = $rs2->fetch_assoc())
						  {
						    $late = $row['COUNTTB'];
						  }
						  $sql6 = "UPDATE chart SET number = '".$late."' WHERE status = 'ล่าช้า'";
						  $rs6 = $conn->query($sql6);
							echo $late;
						  echo ',';

						  while($row = $rs3->fetch_assoc())
						  {
						    $notwork = $row['COUNTTB'];
						  }
						  $sql7 = "UPDATE chart SET number = '".$notwork."' WHERE status = 'ยังไม่เริ่มดำเนินการ'";
						  $rs7 = $conn->query($sql7);
							echo $notwork;
							echo ',';


						  while($row = $rs4->fetch_assoc())
						  {
						    $finish = $row['COUNTTB'];

						  }
							$sql8 = "UPDATE chart SET number = '".$finish."' WHERE status = 'เสร็จแล้ว'";
							$rs8 = $conn->query($sql8);
							echo $finish;

	            ?>

	            ]
	        }/*,
	        {
	            name: '2016',
	            data: [<?php /*
	                for ($i = 0; $i < 4; $i++) {
	                    if($i>0){
	                        echo ',';
	                    }
	                    echo $i*0.8; //ข้อมูลตัวเลข
	                }
	         */   ?>]
	        },
	        {
	            name: '2017',
	            data: [ <?php /*
	                for ($i = 0; $i < 4; $i++) {
	                    if($i>0){
	                        echo ',';
	                    }
	                    echo $i*0.5;//ข้อมูลตัวเลข
	                }
	           */ ?>]
	        }*/]
	    });
	});
	</script>

</div>


</body>
</html>
