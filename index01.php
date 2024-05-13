<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="icons/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Noto+Sans:wght@300&family=Potta+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <script src="lang.js"></script>
    <title>AIPTECH</title>
</head>
<body>
  <!-- preloader -->
  <div id="preloader">

  </div>
  <!-- preloader end -->
<!-- nav start -->
  <!-- side -->
  
  <nav>
    <img  src="icons/logo.png" alt="nothing">
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="Store.php">DEVELOPMENT TOOL</a>
        <a href="about.php">AboutUs</a>
        <a href="blogs.php">Blogs</a>
        <a href="ContactFrom/index.php">ContactUs</a>
        <a href="Store.php"><i class="fa-solid fa-cart-shopping fa-lg" style="color: #ffffff;"></i> &nbsp Store</a>
    </div>
    
    <div id="main">
        <button class="openbtn" id="menuButton" onclick="openNav()">☰</button>  
    </div>
    </nav>
    <!-- side end -->
    <!-- main_nav -->

    <div class="Main_nav">
  <a href="#" class="logo"><img src="icons/logo.png" alt="" srcset=""></a>
  <div class="ml-auto">
    <!-- Development Tool Mega Menu -->
    <div class="dropdown">
        <a class="dropdown ">DEVELOPMENT TOOL</a>
        <div class="dropdown-content mega-menu">
            <div class="row">
                <div class="col-md-4">
                    <h4>Development tool</h4>
                    <ul>
                        <li><a href="tools/cpp.php">AIP ++ &nbsp<img src="icons/aip++-01.png" alt="a" height="20px"width="20px"></a></li>
                        <li><a href="tools/pydora.php">Pydora &nbsp<img src="icons/pydora-01.png" alt="a" height="20px"width="20px"></a></li>
                        <li><a href="tools/rustify.php">Rustify &nbsp<img src="icons/rustify-01.png" alt="a" height="20px"width="20px"></a></li>
                        <li><a href="tools/java.php">Inteli Java &nbsp<img src="icons/java-01.png" alt="a" height="20px"width="20px"></a></li>
                      </ul>
                </div>
                <div class="col-md-4">
                  <h4></h4><br>
                    <ul>
                      <li><a href="tools/feet.php">Feet &nbsp<img src="icons/feet-01.png" alt="" height="20px"width="20px"></a></li>
                      <li><a href="tools/goland.php">Go land &nbsp<img src="icons/goland-01.png" alt="" height="20px"width="20px"></a></li>
                      <li><a href="tools/phps.php">Php slash &nbsp<img src="icons/phps-01.png" alt="" height="20px"width="20px"></a></li>
                    </ul>
                </div>
                <!-- Add more columns as needed -->
            </div>
        </div>
    </div>

    <!-- About Us Mega Menu -->
    <div class="dropdown">
        <a class="dropdown">COMPANY</a>
        <div class="dropdown-content mega-menu">
            <!-- Add content for About Us Mega Menu -->
            <div class="row">
              <div class="col-md-4">
                  <h4>Company 1</h4>
                  <ul>
                      <li><a href="about.php">About Us</a></li>
                      <li><a href="#"></a></li>
                  </ul>
              </div>
              <div class="col-md-4">
                  <h4>Company 2</h4>
                  <ul>
                      <li><a href="blogs.php">Blogs</a></li>
                      <li><a href="ContactFrom/index.php">Contact Us</a></li>
                  </ul>
              </div>
              <!-- Add more columns as needed -->
          </div>
        </div>
    </div>

    <!--  Mega Menu -->
    <div class="dropdown">
        <a class="dropdown">SUPPORT</a>
        <div class="dropdown-content mega-menu">

            <!-- Add content for Support Mega Menu -->
            <div class="row">
              <div class="col-md-4">
                  <h4>Support 1</h4>
                  <ul>
                      <li><a href="cpp_tool.php">C++ tool</a></li>
                      <li><a href="devops.php">Dev Ops</a></li>
                  </ul>
              </div>
              <div class="col-md-4">
                  <h4>Support 2</h4>
                  <ul>
                      <li><a href="cpp_tool.php">Game Development</a></li>
                      <li><a href="software.php">Software Development</a></li>
                  </ul>
              </div>
              <!-- Add more columns as needed -->
          </div>
        </div>
    </div>
    <a href="#"><img src="icons/bold-double-bar-line.png" alt="" srcset=""></a>
    <a class="login_green" href="log_s.php"><img src="icons/login_green.png" alt=""></a>
    <a href="store.php"><i class="fa-solid fa-cart-shopping fa-lg" style="color: #ffffff;"></i></a>
    <!-- <a href="#"><i class="fa-solid fa-language fa-lg" style="color: #ffffff;"></i></a> -->
  </div>
</div>
  <!-- nav end -->

    <!-- hero start -->
    <header>
       <div class="hero" id="main">
      
        <div id="carouselExampleIndicators" class="carousel carousel-fade" data-ride="carousel" data-interval="7000">
           
          <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
         
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner-1-01.png" class="d-block w-100 img-fluid" alt="...">
                    
                    <div class="carousel-caption d-none d-md-block col-lg-5">
                        <h3>AIPTECH</h3>
                        <h6>we provide the best ide possible for you to build your coding career with c++</h6>
                        <p>Objectively incubate enabled innovation through leveraged mindshare. Competently.</p><br>
                        <a class="btn glow-on-hover" href="tools/cpp.php" role="button">TRY US NOW &nbsp; &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="carousel-item ">
                    <img src="images/banner-2-01.png" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block col-lg-5">
                        <h3>AIPTECH</h3>
                        <h6>we provide the best ide possible for you to build your coding career with python</h6>
                        <p>Objectively incubate enabled innovation through leveraged mindshare. Competently.</p>
                        <br>
                        <a class="btn glow-on-hover" href="tools/pydora.php" role="button">TRY US NOW &nbsp; &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="images/banner-3-01.png" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block col-lg-5">
                        <h3>AIPTECH</h3>
                        <h6>we provide the best ide possible for you to build your coding career so explore out store for more</h6>
                        <p>Objectively incubate enabled innovation through leveraged mindshare. Competently.</p><br>
                        <a class="btn glow-on-hover" href="store.php" role="button">TRY US NOW &nbsp; &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Add more slides here -->
            </div>
          </div>
    </div>
  </header>
  
            <!-- hero end -->
            <!-- about starts -->
          <div class="about">
            <div class="container">
              <div class="row">
                <div class="under">
                      <div class="over">
                         <h3>ABOUT US</h3>
                         <p>
                          Lorem ipsum dolor sit amet, consectetur <br>
                           adipiscing elit, sed do eiusmod tempor <br>
                           incididunt ut labore et dolore magna aliqua.<br>
                            Quis ipsum suspendisse ultrices gravida. <br>
                            Risus commodo viverra maecenas accumsan <br>
                            lacus vel facilisis. 
                         </p><br>
                         <div class="about_btn_container">
                         <a href="store.php" class="about_btn"> Order Now</a>
                        </div>
                      </div>

                </div>
                
              </div>

            </div>
          </div>
<!-- about end -->
      <!-- we provide start-->
         <div class="we_provide">
          <div class="container">
            <h1>WE PROVIDE</h1>
            <div class="row">
              <div class="col-lg-4">
                <div class="boxes">
                  <div class="box_ud">
                <img src="icons/price-tag.png" alt="price-tag">
                <h3>Pricing</h3>
                <p >
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit,  consectetur adipiscing elit 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit,  consectetur adipiscing elit 
                </p>
              </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="boxes">
                  <div class="box_ud">
                <img src="icons/trending.png" alt="price-tag">
                <h3>Pricing</h3>
                <p >
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit,  consectetur adipiscing elit 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit,  consectetur adipiscing elit 
                </p>
              </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="boxes">
                  <div class="box_ud">
                <img src="icons/shield.png" alt="price-tag">
                <h3>Pricing</h3>
                <p >
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit,  consectetur adipiscing elit 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit,  consectetur adipiscing elit 
                </p>
              </div>
                </div>
              </div>
            </div>
           </div>
           </div>
        </div>

      <!-- we provide ends -->
       <!-- trust start -->
<div class="trust">
  <div class="container">
  
    <div class="trust_left">
      <div class="tl_h3_p">
        <h3>TRUST</h3><br>
        <p>
          Many of the world's most dynamic companies and individuals 
         <br>find AIptech tools make them more creative and effective.
        </p><br><br>
      </div>
      <div class="row">
        <div class="under">
          <div class="slider_box">
            <img id="testimonialImage" class="loaded" src="images/trust_1.png"  alt="img" >
            <div class="over">
              <h3 id="testimonialName" class="loaded">Sehan</h3>
              <p id="testimonialText" class="loaded">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
              </p><br>
              <div class="trust_btn_container">
                <a href="#" id="prevBtn" class="trust_btn "> < </a>
                <a href="#" id="nextBtn" class="trust_btn "> > </a>
              </div>
            </div>
          
          </div>
          
        </div>
       
      </div>
    </div>
    <div class="trust_right"><br><br><br>
      <h3>IDE’S POPULARITY</h3><br><br>
      <img src="icons/aip++-01.png" alt="" height="50px" width="50px"><br><br>
      <div class="chart">
        <div class="bar"></div>
        <!-- Change the value below -->
        <span id="value1">90</span>
       </div><br><br>
       <img src="icons/pydora-01.png" alt="" height="50px" width="50px"><br><br>
       <div class="chart">
         <div class="bar"></div>
         <!-- Change the value below -->
         <span id="value1">100</span>
       </div><br><br>
       <img src="icons/rustify-01.png" alt="" height="50px" width="50px"><br><br>
       <div class="chart">
         <div class="bar"></div>
         <!-- Change the value below -->
                 <span id="value1">100</span>
        </div><br><br>
            </div>
          </div>
        
</div>

<!-- trust end -->
<!-- client start-->
        <div class="client">
          <div class="container">
            <h2> OUR CLIENT'S</h2><br><br><br>
            <center><div class="client_logo">
              <div class="client_logo_tr">
                <img class="col-lg-2" src="icons/google-logo-9831.png" height="100px" width="300px" alt="" srcset="">
                <img class="col-lg-2" src="icons/tesla-logo-png-2231.png" height="100px" width="300px" alt="" srcset="">
                <img class="col-lg-2" src="icons/ubisoft-logo.png" height="100px" width="300px" alt="" srcset="">
                <img class="col-lg-2" src="icons/6148b59c9091220004552cde.png" height="100px" width="300px" alt="" srcset="">
                <img class="col-lg-2" src="icons/58429400a6515b1e0ad75acc.png" height="100px" width="300px" alt="" srcset="">
                
              </div>
            </center>
            <div class="stories">
              <div class="container">
               
                  <h2 >CUSTOMER STORIES</h2> 
                <br>
              
              <div class="row">
                <div class="col-lg-4">
                  <div class="c_stories">
                    <h4>Open stack</h4>
                    <p>aip soft has tons of 
                      advantages when compared 
                      to text editors in terms of supported
                       functionality. With respect 
                      to Python development, 
                      aip soft definitely stands 
                      out with features
                       like remote debugging, code 
                      quality checks, and integrations 
                      with third-party software like 
                      Docker and Kubernetes.</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="c_stories">
                    <h4 >Open stack</h4>
                    <p>aip soft has tons of 
                      advantages when compared 
                      to text editors in terms of supported
                       functionality. With respect 
                      to Python development, 
                      PyCharm definitely stands 
                      out with features
                       like remote debugging, code 
                      quality checks, and integrations 
                      with third-party software like 
                      Docker and Kubernetes.</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="c_stories">
                    <h4>Open stack</h4>
                    <p>PyCharm has tons of 
                      advantages when compared 
                      to text editors in terms of supported
                       functionality. With respect 
                      to Python development, 
                      PyCharm definitely stands 
                      out with features
                       like remote debugging, code 
                      quality checks, and integrations 
                      with third-party software like 
                      Docker and Kubernetes.</p>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
          </div>
           
        </div>
        <!-- client end -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div class="f_content">
                <h3>DEVELOPER TOOLS</h3><br>
                <a href="tools/cpp.php">Aip++ </a><br><br>
                <a href="tools/pydora.php">Py dora</a><br><br>
                <a href="tools/java.php">inteli java</a><br><br>
                <a href="tools/feet.php">Feet</a><br><br>
                <a href="tools/goland.lphp">Go land</a><br><br>
                <a href="tools/phps.php">Php slash</a><br><br>
                <a href="tools/rustify.php">Rustify</a><br><br>
              </div>
            
            </div>
            <div class="col-lg-3">
              <div class="f_content">
              <h3>SUPPORT</h3><br>
              <a href="cpp_tool.php">C++ tools</a><br><br>
              <a href="devops.php">Dev ops</a><br><br>
              <a href="cpp_tool.php">Game development</a><br><br>
              <a href="software.php">Software development</a><br><br>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="f_content">
            <h3>COMPANY</h3><br>
            <a href="about.php">About Us</a><br><br>
            <a href="#">News</a><br><br>
            <a href="blogs.php">Blogs</a><br><br>
            <a href="ContactFrom/index.php">Contact Us</a><br><br>
          </div>
         </div>
         <div class="col-lg-3">
          <div class="f_content"><br><br>
          <img src="icons/Group 5.png" alt="#">
         </div>
         </div>
            </div>
            
          </div>
          <center>
          <div class="f_bottom">
            <div class="line">
              <hr>
            </div>
             <div class="container">
              <div class="f_bottom_left">
                <a href="#"><img src="icons/facebook.png" alt="#" srcset=""></a>
                <a href="#"><img src="icons/twitter.png" alt="#" srcset=""></a>
                <a href="#"><img src="icons/youtube.png" alt="#" srcset=""></a>
                <a href="#"><img src="icons/linkedin.png" alt="#" srcset=""></a>
              </div>
              

            </div>
          </div></center>
        </footer>

      <!-- links -->
       <script src="js/script.js"></script>
      

       <!-- js links -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>