<?php include("layoutadmin.php");
      include("session.php");
      require("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<br><br>

<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
          <div class="col-lg-6">


            <h1 class="page-header">เพิ่มโครงการ
          </div>
      </div>
      <!-- /.row -->

      <!-- Content Row -->
      <div class="row">

          <!-- Contact Details Column -->

      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

     <div class="col-md-8 ">

              <form name="sentMessage" id="contactForm" method="post" action="add_check.php"
               onSubmit="JavaScript:return fncSubmit();" enctype="multipart/form-data" >


                        <div class="control">

                          <label>ชื่อโครงการ</label>
                                <input type="text" name= "name" required="required" class="form-control" value="" placeholder="กรอกชื่อโครงการ" id="phone" required data-validation-required-message="Please enter your phone number.">

                              </div>



                  <div class="control-group form-group">
                      <div class="controls">
                          <label>เบอร์โทรศัพท์</label>
                          <input type="tel" name="tel" placeholder="กรอกเบอร์โทรศัพท์" class="form-control" id="phone"  required data-validation-required-message="Please enter your phone number.">
                  </div>
                </div>

                  <div class="control-group form-group">


              <!--    <div class="control-group form-group">
                      <div class="controls">
                          <label>สถานะโปรเจค</label>
                            <select class="form-control"  name="status" id="status"   required data-validation-required-message="Please enter your state.">
                              <option value="ยังไม่เริ่มดำเนิน"><label>ยังไม่เริ่มดำเนิน</label></option>
                              <option value="กำลังดำเนินการ"><label>กำลังดำเนินการ</label></option>
                              <option value="ล่าช้า"><label>ล่าช้า</label></option>
                              <option value="เสร็จแล้ว"><label>เสร็จแล้ว</label></option>
                        //   <option value="{{ old('email') }}" selected><label></label></option>
                            </select>
                      </div>
                  </div> -->
                  <input type="hidden" name="statususer" value="user">

                  <input type="hidden" name="status" value="ยังไม่เริ่มดำเนินการ">
                  <input type="hidden" name="progress" value="0">



          <!--

                  <div class="control-group form-group">
                      <div class="controls">
                          <label>เพิ่มรูปภาพ</label>
                          <input type="file" id="image" name ="image" required data-validation-required-message="Please enter your photo.">

                </div>
              </div> -->

           <!--    <div class="control-group form-group">
                  <div class="controls">
                      <label>หัวข้อ</label>
                      <input type="text" name="heading" placeholder="ระบุหัวข้อเกี่ยวกับภาพ" class="form-control" id="heading"  required data-validation-required-message="Please enter your phone number.">
              </div>
              </div>


                  <div class="control-group form-group">
                      <div class="controls">
                          <label>รายละเอียด</label><br>
                          <textarea rows="2" name ="comment" cols="1"  width ="50%" class="form-control" value="" placeholder="กรอกข้อมูลอธิบาย"   id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                      </div>
                  </div> -->

                  <div class="control-group form-group">
                      <div class="controls">
                          <label>ชื่อ - สกุล</label>
                          <input type="text" name="namecus" placeholder="กรอกชื่อ - สกุล" class="form-control" id="heading"  required data-validation-required-message="Please enter your phone number.">
                  </div>
                  </div>


                      <div class="control-group form-group">
                          <div class="controls">
                              <label>ที่อยู่</label><br>
                              <textarea rows="2" name ="address" cols="1"  width ="50%" class="form-control" value="" placeholder="กรอกที่อยู่"   id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                          </div>
                      </div>

                      <div class="controls">
                          <label>Email Address:</label>
                            <input type="email" class="form-control" name="email" value="" placeholder="กรอก email"  id="email" required data-validation-required-message="Please enter your email address.">
                      </div>
                  </div>

                  <div class="control-group form-group">
                      <div class="controls">
                          <label>รายละเอียดโครงการ</label><br>
                          <textarea rows="2" name ="desc" cols="1"  width ="50%" class="form-control" value="" placeholder="กรอกรายละเอียด"  
                           id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                      </div>
                  </div>


                  <div class="control-group form-group">
                      <div class="controls">
                          <label>วันที่เริ่ม</label><br>
                          <input type="date" name ="timestart" id="name" value="" required data-validation-required-message="Please enter your time.">
                </div>
              </div>

                  <div class="control-group form-group">
                      <div class="controls">
                          <label>วันที่สิ้นสุด</label><br>
                          <input type="date" name ="timestop" id="name" value="" required data-validation-required-message="Please enter your time.">
                </div>
              </div>

              <div class="control-group form-group">
                  <div class="controls">
                      <label>ไอดีของลูกค้า</label><br>
                      <input type="text" name ="idcustomer" placeholder="ID" id="name" value="" required data-validation-required-message="Please enter your time.">
            </div>
          </div>
<!--
          รหัสผ่านของลุกค้าอันเก่า
          <div class="control-group form-group">
              <div class="controls">
                  <label>รหัสผ่านของลูกค้า</label><br>
                  <input type="text" name ="passcustomer" id="name" placeholder="Password" value="" required data-validation-required-message="Please enter your time.">
        </div>
      </div> -->
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
