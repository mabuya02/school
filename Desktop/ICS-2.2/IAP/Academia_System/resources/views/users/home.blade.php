<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Academia Online - Homepage</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-dark bg-dark">
               <a class="logo" href="index.html"><img src="images/logo1.png"></a>
               <div class="search_section">
                  <ul>
                     <li><a href="{{ route('login') }}">Log In</a></li>
                  </ul>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarsExample01">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#reviews">User Reviews</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <!--banner section start -->
         <div class="banner_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h4 class="banner_taital"><span class="font_size_90">A</span>cademia</h4>
                                 <p class="banner_text">Consider us as your child's educational partner!</p>
                                 <!-- <div class="book_bt"><a href="#">Get Started</a></div> -->
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="images/home.jpg" class="image_1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         <!--banner section end -->
      </div>
      <!--header section end -->
      <!--about section start -->
      <div id="about" class="container">
         <div class="category_section_2">
            <div class="row">
               <div class="col-lg-12 col-sm-12">
                  <div class="beds_section active">
                     <h1 class="bed_text">ABOUT US</h1>
                     <br>
                     <div><p>Welcome to Academia where we provide a high-quality education to students of all ages. Established in 2020, we have a long history of academic excellence and a strong commitment to shaping the next generation of leaders.
                        <br>
                     At Academia, we believe in fostering a love of learning in our students through a well-rounded curriculum that includes core subjects such as math, science, and language arts, as well as electives in the arts, athletics, and technology. We have dedicated and highly qualified teachers who are passionate about their subjects and committed to helping their students succeed.
                        <br>
                     In addition to our excellent academic program, we also place a strong emphasis on character education, helping our students develop important values such as responsibility, respect, and kindness. Our extracurricular activities and community service programs further provide opportunities for students to develop their skills and interests outside of the classroom.
                        <br>
                     We believe that education is not just about memorizing facts, but about developing critical thinking skills, fostering creativity, and building self-confidence. That's why we create an environment that promotes individual development and encourages students to take risks and strive for their personal best.
                        <br>
                     We welcome you to visit our campus and see firsthand the amazing things happening at Academia. Thank you for considering us as your child's educational partner.</p></div>
                  </div>
               </div>
         </div>
      </div>
   </div>
      <!-- about section end -->
      <!-- database section start -->
<!--       <div class="product_section layout_padding">
         <div class="container">
            <h1 class="feature_taital">FEATURED PRODUCTS</h1>
            <p class="feature_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
            <div class="product_section_2">
               <div class="row">
                  <div class="col-sm-5">
                     <div class="feature_box">
                        <h1 class="readable_text">Readable content of</h1>
                        <div><img src="images/img-7.png" class="image_7"></div>
                     </div>
                     <div class="feature_box_1">
                        <h1 class="readable_text">Readable content of</h1>
                        <div><img src="images/img-7.png" class="image_7"></div>
                     </div>
                  </div>
                  <div class="col-sm-7">
                     <div class="feature_box_2">
                        <h1 class="readable_text">Readable content of</h1>
                        <div><img src="images/img-8.png" class="image_8"></div>
                        <div class="seemore_bt"><a href="#">see More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- database section end -->
      <!-- reviews section start -->
      <div id="reviews" class="client_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="feature_taital">User Review</h1>
                     <div class="client_section_2">
                        <div class="image_9"><img src="images/img-9.png"></div>
                        <h3 class="nolmal_text">John Allan</h3>
                        <p class="ipsum_text">I've been using the XYZ School Management System for the past year and it has greatly improved the efficiency and effectiveness of our school's operations.
                           <br>
                        The system has a variety of modules that automate critical processes such as student registration, enrollment, and scheduling. It also includes features for handling grades, transcripts, and reports, as well as tools for communication and collaboration among faculty, staff, and students. One of the major advantages of this system is its ability to easily track and manage student information, including demographic data, grades, and attendance records.
                           <br>
                        Overall, I highly recommend the Academia to other educational institutions looking to improve their operations and student outcomes. It has been a valuable asset to our school and saved us a lot of time and effort.</p>
                        <div class="image_9"><img src="images/icon-10.png"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- reviews section end -->
      <!-- actions section start -->
<!--       <div class="newsletter_section layout_padding">
         <div class="container">
            <h6 class="conect_text">Connect to caraft</h6>
            <h1 class="newsletter_taital">Join Our Newsletter</h1>
            <p class="newsletter_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                    <div class="col-md-6">
                     <form>
                     <div class="email_text">
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Name" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        </div>
                        <div class="send_btn"><a href="#">SEND</a></div>
                     </div>
                     </form>
                  </div>
            </div>
         </div> -->
      <!-- actions section end -->
      <!-- footer section start -->
      <div id="contact" class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-sm-12">
                  <h4 class="information_text">Welcome!</h4>
                  <p class="dummy_text">We welcome you to visit our campus and see firsthand the amazing things happening at XYZ School. Thank you for considering us as your child's educational partner.</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="information_main">
                     <h4 class="information_text">Useful Links</h4>
                     <p>
                        <a class="many_text" href="#about">About,</a>
                        <a class="many_text" href="#reviews">Review,</a>
                        <a class="many_text" href="#contact">Contact.</a>
                     </p>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="information_main">
                     <h4 class="information_text">Contact Us</h4>
                     <p class="call_text"><a href="#">+254 727 295997</a></p>
                     <p class="call_text"><a href="#">academia@gmail.com</a></p>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                           <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright_section">
               <h1 class="copyright_text">
               Copyright 2020 All Right Reserved</a>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
      <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
   </body>
</html>