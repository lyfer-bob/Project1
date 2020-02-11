<?php // include("layoutadmin.php");
      //include("session.php");
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

    <script type="text/javascript">
    function doSomething(i){

      $.ajax({
        url: "gra_table.php",
        data: "action=show&radiobtn="+i,
        type: 'POST',
        dataType: 'html',
        success: function(data) {
          $('#div_show').html(data);
        }

      });
    }
    </script>

</head>

<body>

                <form name="FrmData" id="FrmData" method="get"
                  enctype="multipart/form-data" >
    <div id="wrapper">
        <div id="page-wrapper" style="min-height: 200px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">โครงการ</h1>


                    <div class="page-header">
                      สถานะโปรเจค
                      <input type="text" name="progress" onclick="doSomething(this.value);" placeholder="กรุณากรอกความคืบหน้า"
                        onKeyPress="CheckNum()" maxlength="3"
                        onKeyUp="if(this.value>100) this.value='' ;"
                         value=""
                    </div>

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
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

    <script>
      $(document).ready(function() {
          $('#dataTables-example').DataTable({
              responsive: true
          });
      });
      </script>

      <script language="javascript">
function CheckNum(){
		if (event.keyCode < 48 || event.keyCode > 57){
		      event.returnValue = false;

  };
};

</script>


</body>

</html>
