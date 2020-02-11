<?php include("layoutadmin.php");
    //  include("session.php");
      require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>



</head>

<body>

                <form name="FrmData" id="FrmData" method="get"
                  enctype="multipart/form-data" >

    <div id="wrapper">
      <div id="page-wrapper" style="min-height: 200px;">
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel panel-default">



                  <?php
                  if($_POST['action'] == 'show'){

                  if ($_POST['radiobtn'] == "ทั้งหมด") {

                  $sql = "select *  from project";
                  }
                  else if ($_POST['radiobtn'] == "กำลังดำเนินการ") {
                    $sql = "select * from project where status ='กำลังดำเนินการ'";
                  }
                  else if ($_POST['radiobtn'] == "ล่าช้า") {
                   $sql = "select *  from project where status ='ล่าช้า'";
                  }
                  else if ($_POST['radiobtn'] == "ยังไม่เริ่มดำเนินการ")
                   {
                    $sql = "select *  from project where status ='ยังไม่เริ่มดำเนินการ'";

                  }
                  else if ($_POST['radiobtn'] == "เสร็จแล้ว")
                   {
                    $sql = "select *  from project where status ='เสร็จแล้ว'";

                  }
                  }
                                //$  $sql = "select *  from project ";
                                 $rs = $conn->query($sql);
                                 if($rs->num_rows > 0)
                                 {
                                  $i=1;
                                  echo "<div class='panel-heading'>";
                                  echo " ข้อมูล";
                                  echo "</div>";
                                  echo "<div class='panel-body'>";
                                  echo "<table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example'>";
                                  echo "<thead>";
                                  echo "<tr>";
                                  echo "<th>ลำดับ</th>";
                                  echo "<th>ชื่อโครงการ</th>";
                                  echo "<th>สถานะโครงการ</th>";
                                  echo "<th>ความคืบหน้าของโครงการ</th>";
                                  echo "<th>เบอร์โทรศัพท์</th>";
                                  echo "<th>ชื่อ - สกุล</th>";
                                  echo "</tr>";
                                  echo "</thead>";
                                  echo "<tbody>";

                                }
                                else {
                                    echo "<h1>ไม่พบข้อมูล</h1>";
                                }
                                while($row = $rs->fetch_assoc())
                  {
                  /* <tr class="odd gradeX">
                      <td>Trident</td>
                      <td>Internet Explorer 4.0</td>
                      <td>Win 95+</td>
                      <td class="center">4</td>
                      <td class="center">X</td>
                  </tr>*/
                  echo "<tr class='gradeX'>";
                  // echo "    <td align='center'>" . $i . "</td>";
                  echo "    <td align='center'>" . $i. "</td>";
                  echo "    <td class='center'><a href='testter.php?name=".$row["name"]."'>" . $row["name"] . "</td>";
                  //   echo "    <td align='center'><a href='testter.php?name=".$row["name"]."'>click</a></td>";

                  echo "    <td class='center'>". $row["status"]. "</td>";
                  echo "<td>". "<div class='progress'>
                  <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='".$row["progress"]."'
                  aria-valuemin='0' aria-valuemax='100' style='width:".$row["progress"]."%'>
                  ".$row["progress"]."%
                  </div>
                  </div>" . " </td>";

                  //   echo "    <td class='center'>". $row["progress"]. "</td>";
                  //       echo "    <td>"."<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='".$row["progress"]."' aria-valuemin='0' aria-valuemax='100' style='width:".
                  //     $row["progress"]."%>"."</div></td>";
                  echo "    <td class='center'>".$row["tel"] . "</td>";
                  echo "    <td class='center'>".$row["namecus"] . "</td>";
                  //     echo "    <td align='center'><a href='testter.php?name=".$row["name"]."'>click</a></td>";
                  echo " </tr>";
                  //   <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  //                                               <span class="sr-only">40% Complete (success)</span>
                  //                                           </div>

                  echo " </tr>";

                  $i++;
                  }

                    echo "</thbody>";
                    echo "</table>"; ?>
                  </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->

              </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
  </form>
  <div id="div_show"></div>

    <!-- jQuery -->
    <script src="/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
