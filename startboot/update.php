<?php
      include("session.php");
      include("layoutadmin.php");
      require("connect.php");
?>

<?php
//รับข้อมูลมาเพื่อแสดงใน value
/*$status = "select status from project where name ='".$_GET['name']."'";
$progress = "select progress from project where name ='".$_GET['name']."'";
$st = $conn->query($status);
$pr = $conn->query($progress);
$show = mysql_fetch_object($st);
$show1 = mysql_fetch_object($pr);
echo $show;
echo $show1;*/
 ?>

<!DOCTYPE html>
<html lang="en">
<br><br>
<body>
<div class="container">


      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
          <div class="col-lg-6">

            <a href="testter.php?name=<?php  echo $_GET['name'];  ?>"><h1 class="page-header"><?php  echo $_GET['name'];?></a>

          </div>
      </div>
<?php
//รับข้อมูลมาเพื่อแสดงใน value
$status = "select status from project where name ='".$_GET['name']."'";
$progress = "select progress from project where name ='".$_GET['name']."'";
$st = $conn->query($status);
$pr = $conn->query($progress);






/*$show = $st>fetch_assoc();
$show1 = $progress>fetch_assoc();
$row = $rs->fetch_assoc())
echo $show['status'];
echo $show1['progress']; */
 ?>
      <!-- /.row -->

      <!-- Content Row -->
      <div class="row">

          <!-- Contact Details Column -->

      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

     <div class="col-md-8 ">

              <form name="frm_update" id="contactForm" method="post" action="update_check.php"
               onSubmit="JavaScript:return fncSubmit();" enctype="multipart/form-data" >



                        <div class="control">



                  <div class="control-group form-group">
                      <div class="controls">
                          <label>สถานะโปรเจค</label>
                            <select class="form-control"  name="status" id="status"
                             required data-validation-required-message="Please enter your state." >

                                 <?php if ($st == true) {
                                  while($row = $st->fetch_assoc())
                                {


                                if ($row["status"] == 'ยังไม่เริ่มดำเนินการ') {
                                  echo "<option value='ยังไม่เริ่มดำเนินการ' selected><label>ยังไม่เริ่มดำเนินการ</label></option>";
                                  echo "<option value='กำลังดำเนินการ'><label>กำลังดำเนินการ</label></option>";
                                  echo "<option value='ล่าช้า'><label>ล่าช้า</label></option>";
                                  echo "<option value='เสร็จแล้ว'><label>เสร็จแล้ว</label></option>";
                                }
                                  else if ($row["status"] == 'กำลังดำเนินการ') {
                                    echo "<option value='ยังไม่เริ่มดำเนินการ' selected><label>ยังไม่เริ่มดำเนินการ</label></option>";
                                    echo "<option value='กำลังดำเนินการ' selected><label>กำลังดำเนินการ</label></option>";
                                    echo "<option value='ล่าช้า'><label>ล่าช้า</label></option>";
                                    echo "<option value='เสร็จแล้ว'><label>เสร็จแล้ว</label></option>";
                                  }
                                  else if ($row["status"] == 'ล่าช้า') {
                                    echo "<option value='ยังไม่เริ่มดำเนินการ' selected><label>ยังไม่เริ่มดำเนินการ</label></option>";
                                    echo "<option value='กำลังดำเนินการ'><label>กำลังดำเนินการ</label></option>";
                                    echo "<option value='ล่าช้า' selected><label>ล่าช้า</label></option>";
                                    echo "<option value='เสร็จแล้ว'><label>เสร็จแล้ว</label></option>";
                                  }
                                  else if ($row["status"] == 'เสร็จแล้ว') {
                                    echo "<option value='ยังไม่เริ่มดำเนินการ' selected><label>ยังไม่เริ่มดำเนินการ</label></option>";
                                    echo "<option value='กำลังดำเนินการ'><label>กำลังดำเนินการ</label></option>";
                                    echo "<option value='ล่าช้า'><label>ล่าช้า</label></option>";
                                    echo "<option value='เสร็จแล้ว' selected><label>เสร็จแล้ว</label></option>";
                                  }

                                }

                              } ?>

                            </select>
                      </div>
                  </div>

                  <div class="control-group form-group">
                      <div class="controls">
                          <label>ประมาณการความก้าวหน้า(คิดเป็น%)</label>
                          <input type="text" name="progress" placeholder=""
                          onKeyPress="CheckNum()" maxlength="3"
                          onKeyUp="if(this.value>100) this.value='' ;"
                           value="<?php if ($pr == true) {
                            while($row = $pr->fetch_assoc())
                          {
                           echo $row["progress"];
                          }
                          } ?>"
                         class="form-control" id="phone"  required data-validation-required-message="Please enter your phone number.">
                  </div>
                  </div>



          <input type="hidden" name="name" value="<?php  echo $_GET['name'];?>"
            <?php
            $date = date("d-m-Y");
             ?>
                  <div id="success"></div>
                  <!-- For success/fail messages -->

                  <center><button type="submit" class="btn btn-primary">ตกลง</button></center>
                  <div class="left" align ='right'>

                    <?php /*
                      date_default_timezone_set('asia/bangkok');
                        $date = date("d-m-Y");
                        $time = date("H:i:a");

                        echo $date." / ".$time; */
                      ?>


                  </div>

              </form>


          </div>
          <div class="col-md-8 ">

                   <form name="sentMessage" id="contactForm" method="post" action="update_check2.php"
                    onSubmit="JavaScript:return fncSubmit2();" enctype="multipart/form-data" >



                   <div class="control-group form-group">
                       <div class="controls">
                           <label>ความคืบหน้าโครงการ</label>
                           <input type="text" name="heading" placeholder="ระบุความคืบหน้า" class="form-control" id="heading"  required data-validation-required-message="Please enter your phone number.">
                   </div>
                   </div>


                       <div class="control-group form-group">
                           <div class="controls">
                               <label>รายละเอียด</label><br>
                               <textarea rows="2" name ="comment" cols="1"  width ="50%" class="form-control" value="" placeholder="กรอกข้อมูลอธิบาย"   id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                           </div>
                       </div>

                       <div class="control">
                 <div class="control-group form-group">
                     <div class="controls">
                         <label>เพิ่มรูปภาพ</label>
                         <input type="file" id="image" name ="image" required data-validation-required-message="Please enter your photo.">

               </div>
             </div>


               <input type="hidden" name="name" value="<?php  echo $_GET['name'];?>"
                 <?php
                 $date = date("d-m-Y");
                  ?>
                       <div id="success"></div>
                       <!-- For success/fail messages -->

                       <center><button type="submit" class="btn btn-primary">ตกลง</button></center>
                       <div class="left" align ='right'>

                         <?php /*
                           date_default_timezone_set('asia/bangkok');
                             $date = date("d-m-Y");
                             $time = date("H:i:a");

                             echo $date." / ".$time; */
                           ?>


                       </div>


                   </form>


               </div>

        </div>
      </div>
      <script src="js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>

      <!-- Script to Activate the Carousel -->
      <script>
      $('.carousel').carousel({
          interval: 5000 //changes the speed
      })
      </script>

    </script>
  <script language="JavaScript">
     function fncSubmit()
{
  if (document.frm_update.progress.value != "100" && document.frm_update.status.value =="เสร็จแล้ว") {
    alert('กรุณากรอกข้อมูลให้ถุกต้อง');
    return false;
  }
   else if(document.frm_update.progress.value != "0" && document.frm_update.status.value =="ยังไม่เริ่มดำเนินการ" )
   {
    alert('กรุณากรอกข้อมูลให้ถุกต้อง');
    return false;
   }
   else if (document.frm_update.progress.value == "0" && document.frm_update.status.value !="ยังไม่เริ่มดำเนินการ") {
     alert('กรุณากรอกข้อมูลให้ถุกต้อง');
     return false;
   }
   else if (document.frm_update.progress.value == "0" && document.frm_update.status.value =="กำลังดำเนินการ") {
     alert('กรุณากรอกข้อมูลให้ถุกต้อง');
     return false;
   }
   else if (document.frm_update.progress.value == "100" && document.frm_update.status.value !="เสร็จแล้ว") {
     alert('กรุณากรอกข้อมูลให้ถุกต้อง');
     console.log(document.frm_update.progress.value);
     return false;
   }





}
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
