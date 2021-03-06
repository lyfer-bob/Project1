
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>บริษัท ธารานนท์ คอนสตรัคชั่นดีไซน์ จำกัด</title>

      <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">


        <!-- Fonts จาก auth-- >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <!-- Styles จาก auth -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/modern-business.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">หน้าแรก</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
              <!--      <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li> -->
                    <li>
                        <a href="contact">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="project1">1 Column Project</a>
                            </li>
                            <li>
                                <a href="project2">2 Column Project</a>
                            </li>
                          <!-- list 3-5 เผื่อทำต่อ
                          <li>
                                <a href="portfolio-3-col">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item">Single Portfolio Item</a>
                            </li> -->
                        </ul>
                    </li>




          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ส่วนของผู้ดูแลระบบ<b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li>
                      <a href="register.php">Register</a>
                  </li>
                  <li>
                      <a href="addproject.php">เพิ่มโปรเจคงานอื่นๆ</a>
                  </li>
                  <li>
                      <a href="addproject2.php">เพิ่มโปรเจคสร้างบ้าน</a>
                  </li>
                  <li>
                      <a href="update.php">update</a>
                  </li>
                  <li>
                      <a href="pricing.php">โปรเจคทั้งหมด</a>
                  </li>
              </ul>
          </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                          <a href="logout.php">Logout</a>
                    </li>
      <!--                  <li>
                      <ul class="nav navbar-nav navbar-center">

                          @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">เข้าสู่ระบบ</a></li>


                      @else
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>


                                  <ul class="dropdown-menu" >
                                      <li><a href="{{ url('/admin') }}"></i>เฉพาะแอดมิน</a></li>
                                      <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>ออกจากระบบ</a></li>
                                  </ul>

                              </li>
                          @endif
                      </ul>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>







    <!-- jQuery -->
    <script src="{{ asset('/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
