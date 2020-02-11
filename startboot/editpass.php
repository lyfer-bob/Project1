<?php include("layout.php");
      include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<br><br>

<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
          <div class="col-lg-6">


            <h1 class="page-header">เปลี่ยนรหัสผ่าน
          </div>
      </div>
      <!-- /.row -->

      <!-- Content Row -->
      <div class="row">

          <!-- Contact Details Column -->

      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

     <div class="col-md-8 ">

              <form name="sentMessage" id="contactForm" method="post" action="edit_pass.php"
               onSubmit="JavaScript:return fncSubmit();" enctype="multipart/form-data"
               target="iframe_target">
               <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>



                        <div class="control">

                          <label>รหัสผ่านเดิม</label>
                                <input type="text" name= id='pass' "passold" required="required" class="form-control" value=""  required data-validation-required-message="Please enter your phone number.">

                              </div>

                    <input type="hidden" name="id" value="<?php echo $_GET['name'] ?>">

                  <div class="control-group form-group">
                      <div class="controls">
                          <label>รหัสผ่านใหม่</label>
                          <input type="password" name="newpass" id='pass' class="form-control"  required data-validation-required-message="Please enter your phone number.">
                  </div>
                </div>

                  <div class="control-group form-group">


                  <div class="control-group form-group">
                      <div class="controls">
                          <label>ยืนยันรหัสผ่าน</label>
                          <input type="password" name="checkpass" id='pass' class="form-control"  required data-validation-required-message="Please enter your phone number.">
                  </div>
                  </div>

                  <center><button type="submit" class="btn btn-primary" onclick="myFunction()">ตกลง</button></center>

                  <br>
                  <br>
                  <br>
                  <script src="js/jquery.js"></script>

                  <!-- Bootstrap Core JavaScript -->
                  <script src="js/bootstrap.min.js"></script>

                  <!-- Script to Activate the Carousel -->
                  <script>
                  $('.carousel').carousel({
                      interval: 5000 //changes the speed
                  })
                  </script>



                </form>

                </div>
                </div>
                </div>
                </body>

                </html>
