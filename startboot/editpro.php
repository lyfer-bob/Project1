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


            <h1 class="page-header">แก้ไขโครงการ
          </div>
      </div>
      <!-- /.row -->

      <!-- Content Row -->
      <div class="row">

          <!-- Contact Details Column -->

      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

     <div class="col-md-8 ">

              <form name="sentMessage" id="contactForm" method="post" action="edit_pro.php"
               onSubmit="JavaScript:return fncSubmit();" enctype="multipart/form-data" >


                        <div class="control">

                          <label>ชื่อโครงการ</label>
                                <input type="text" name= "name" required="required"  class="form-control" value="<?php
                                      $sql = "select * from project where name = '".$_GET['name']."'";
                                      $rs = $conn->query($sql);
                                        while($row = $rs->fetch_assoc())
                                        {
                                        echo  $row['name'];
                                        }
                                ?>"
                                 placeholder="ชื่อโปรเจค" id="phone" required data-validation-required-message="Please enter your phone number.">

                              </div>



                  <div class="control-group form-group">
                      <div class="controls">
                          <label>เบอร์โทรศัพท์</label>
                          <input type="tel" name="tel" placeholder="กรอกเบอร์โทรศัพท์" value="<?php
                                  $sql = "select * from project where name = '".$_GET['name']."'";
                                  $rs = $conn->query($sql);
                                    while($row = $rs->fetch_assoc())
                                    {
                                    echo  $row['tel'];
                                    }
                            ?>" class="form-control" id="phone"  required data-validation-required-message="Please enter your phone number.">
                  </div>
                </div>

                  <div class="control-group form-group">



                  <div class="control-group form-group">
                      <div class="controls">
                          <label>ชื่อ - สกลุ</label>
                          <input type="text" name="namecus" placeholder="กรอกชื่อ - สกุล" value="<?php
                                $sql = "select * from project where name = '".$_GET['name']."'";
                                $rs = $conn->query($sql);
                                  while($row = $rs->fetch_assoc())
                                  {
                                  echo  $row['namecus'];
                                  }
                          ?>" class="form-control" id="heading"  required data-validation-required-message="Please enter your phone number.">
                  </div>
                  </div>


                      <div class="control-group form-group">
                          <div class="controls">
                              <label>ที่อยู่</label><br>
                              <textarea rows="2" name ="address" cols="1"  width ="50%" class="form-control" value="<?php
                                    $sql = "select * from project where name = '".$_GET['name']."'";
                                    $rs = $conn->query($sql);
                                      while($row = $rs->fetch_assoc())
                                      {
                                      echo  $row['address'];
                                      }
                              ?>" placeholder="กรอกข้อมูลอธิบาย"   id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"><?php
                                    $sql = "select * from project where name = '".$_GET['name']."'";
                                    $rs = $conn->query($sql);
                                      while($row = $rs->fetch_assoc())
                                      {
                                      echo  $row['address'];
                                      }
                              ?></textarea>
                          </div>
                      </div>

                      <div class="controls">
                          <label>Email Address:</label>
                            <input type="email" class="form-control" name="email" value="<?php
                                  $sql = "select * from project where name = '".$_GET['name']."'";
                                  $rs = $conn->query($sql);
                                    while($row = $rs->fetch_assoc())
                                    {
                                    echo  $row['email'];
                                    }
                            ?>" placeholder="กรอก email"  id="email" required data-validation-required-message="Please enter your email address.">
                      </div>
                  </div>

                  <div class="control-group form-group">
                      <div class="controls">
                          <label>รายละเอียดโครงการ</label><br>
                          <textarea rows="2" name ="desc" cols="1"  width ="50%" class="form-control" value="<?php
                                $sql = "select * from project where name = '".$_GET['name']."'";
                                $rs = $conn->query($sql);
                                  while($row = $rs->fetch_assoc())
                                  {
                                  echo  $row['desc'];
                                  }
                          ?>" placeholder="กรอกรายละเอียด"
                           id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"><?php
                                 $sql = "select * from project where name = '".$_GET['name']."'";
                                 $rs = $conn->query($sql);
                                   while($row = $rs->fetch_assoc())
                                   {
                                   echo  $row['desc'];
                                   }
                           ?></textarea>
                      </div>
                  </div>

                  <div class="control-group form-group">
                      <div class="controls">
                          <label>วันที่เริ่ม</label><br>
                          <input type="date" name ="timestart" id="name" value="<?php
                                $sql = "select * from project where name = '".$_GET['name']."'";
                                $rs = $conn->query($sql);
                                  while($row = $rs->fetch_assoc())
                                  {
                                  echo  $row['timestart'];
                                  }
                          ?>" required data-validation-required-message="Please enter your time.">
                </div>
              </div>

                  <div class="control-group form-group">
                      <div class="controls">
                          <label>วันที่สิ้นสุด</label><br>
                          <input type="date" name ="timestop" id="name" value="<?php
                                $sql = "select * from project where name = '".$_GET['name']."'";
                                $rs = $conn->query($sql);
                                  while($row = $rs->fetch_assoc())
                                  {
                                  echo  $row['timestop'];
                                  }
                          ?>" required data-validation-required-message="Please enter your time.">
                </div>
              </div>

<input type="hidden" name="idcustomer" value="<?php
      $sql9 = "select name from users where pjname = '".$_GET['name']."'";
      $rs = $conn->query($sql9);
        while($row = $rs->fetch_assoc())
        {
        echo  $row['name'];
        }
?>">

              <div class="control-group form-group">
                  <div class="controls">
                      <label>ไอดีของลูกค้า</label><br>
                      <input type="text" name ="idcus" placeholder="ID" disabled id="name" value="<?php
                            $sql = "select name from users where pjname = '".$_GET['name']."'";
                            $rs = $conn->query($sql);
                              while($row = $rs->fetch_assoc())
                              {
                              echo  $row['name'];
                              }
                      ?>" required data-validation-required-message="Please enter your time.">
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
