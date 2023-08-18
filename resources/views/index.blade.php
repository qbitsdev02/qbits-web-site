<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Qbits inc | Home</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('images/loading.png') }}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="{{ route('home') }}">Home </a>
         <a href="#about">About</a>
         <a href="#services">Services</a>
         <a href="#contact">Contact</a>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-4">
                     <div class="logo">
                        <a href="{{ route('home')}}"><img src="{{ asset('images/logo.png') }}" alt="#" style="width: 150px;"/></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-8">
                     <div class="right_bottun">
                        <button class="openbtn" onclick="openNav()"><img src="{{ asset('images/menu_icon.png') }}" alt="#"/> </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="bg_img">s</div>
         <div id="banner1" class="carousel slide banner_slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row banner_shadow">
                           <div class="col-md-7 col-lg-5">
                              <div class="text-bg">
                                 <h1>Soluciones tecnológicas al alcance de todos
                                 </h1>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-7">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="ban_track">
                                       <figure><img src="{{ asset('images/track.png') }}" alt="#" style="width: 300px;"/></figure>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- about section -->
      <div id="about" class="about ">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="about_right">
                     <figure><img src="{{ asset('images/about.png') }}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, There 
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <!-- service section -->
      <div id="services" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Our Services</h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, There </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="service_main">
                     <div class="service_box yell_colo">
                        <i><img src="{{ asset('images/logo.png') }}" alt="#"/></i>
                        <h4>FLY ANYWHERE</h4>
                     </div>
                     <div class="service_box yelldark_colo">
                        <i><img src="{{ asset('images/logo.png') }}" alt="#"/></i>
                        <h4>Cargo service</h4>
                     </div>
                     <div class="service_box yell_colo">
                        <i><img src="{{ asset('images/logo.png') }}" alt="#"/></i>
                        <h4> COURIER SERVICES</h4>
                     </div>
                     <div class="service_box yelldark_colo">
                        <i><img src="{{ asset('images/logo.png') }}" alt="#"/></i>
                        <h4>BOX STORAGE</h4>
                     </div>
                     <div class="service_box yell_colo">
                        <i><img src="{{ asset('images/logo.png') }}" alt="#"/></i>
                        <h4>100% safe</h4>
                     </div>
                  </div>
               </div>
               <!-- <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div> -->
            </div>
         </div>
      </div>
      <!-- end service section -->
      <!-- vehicles section -->
      <section id="servicess" class="vehicles">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>More Services</h2>
                     <p>nternet. It uses a dictionary of over 200 Latin words, combined with .</p>
                  </div>
               </div>
            </div>
         </div>
         <div id="veh" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#veh" data-slide-to="0" class="active"></li>
               <li data-target="#veh" data-slide-to="1"></li>
               <li data-target="#veh" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="{{ asset('images/about.png') }}" alt="#"/></figure>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="{{ asset('images/about.png') }}" alt="#"/></figure>
                              </div>
                              <!-- <h3 class="blac_co">Truck</h3> -->
                           </div>
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="{{ asset('images/about.png') }}" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="{{ asset('images/about.png') }}" alt="#"/></figure>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="{{ asset('images/about.png') }}" alt="#"/></figure>
                              </div>
                              <!-- <h3 class="blac_co">Truck</h3> -->
                           </div>
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="{{ asset('images/about.png') }}" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="{{ asset('images/about.png') }}" alt="#"/></figure>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="{{ asset('images/about.png') }}" alt="#"/></figure>
                              </div>
                              <!-- <h3 class="blac_co">Truck</h3> -->
                           </div>
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="{{ asset('images/about.png') }}" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#veh" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#veh" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end vehicles section -->
      <!-- testimonial section -->
      <!-- <div id="testimonial" class="testimonial bottom_cross bottom_cross2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonials</h2>
                     <p>nternet. It uses a dictionary of over 200 Latin words, combined with .</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="testimonial_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Luda Johnson <br><span class="kisu">( Ceo)</span></h3>
                                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 year</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="testimonial_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Luda Johnson <br><span class="kisu">( Ceo)</span></h3>
                                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 year</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="full cross_layout">
                                          <div class="testimonial_box">
                                             <figure><img src="images/our.png" alt="#"/></figure>
                                             <h3>Luda Johnson <br><span class="kisu">( Ceo)</span></h3>
                                             <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 year</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-caret-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-caret-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div> -->
      <!-- end testimonial section -->
      <!-- choose section -->
      <div class="choose">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Why Choose Us</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-5">
                  <div class="choose_box">
                     <i><img src="{{ asset('images/why1.png') }}" alt="#"/></i>
                     <h3>Our Vission</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
               <div class="col-md-5 offset-md-2">
                  <div class="choose_box">
                     <i><img src="{{ asset('images/why2.png') }}" alt="#"/></i>
                     <h3>Estimate Shipping</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end choose section -->
      <!-- contact section -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Requst A call  for You</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="con_bg">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-5">
                     <form id="request" class="main_form">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Name" type="type" name="Name"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Email" type="type" name="Email"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                           </div>
                           <div class="col-md-12">
                              <input class="contactusmess" placeholder="Message" type="type" Message="Name">
                           </div>
                           <div class="col-md-12">
                              <button class="send_btn">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-7">
                     <div class="co_tru">
                        <figure><img src="{{ asset('images/logo.png') }}" alt="#"/></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact section -->
      <!--  footer -->
      <footer>
         <div class="footer bottom_cross1">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" style="color: #ff7900;" aria-hidden="true"></i></a> Address : Lorem Ipsum <br> is simply dummy 
                        </li>
                        <li><a href="#"><i class="fa fa-phone" style="color: #ff7900;" aria-hidden="true"></i></a>Phone :  +(1234) 567 890</li>
                        <li><a href="#"><i class="fa fa-envelope" style="color: #ff7900;" aria-hidden="true"></i></a>Email : demo@gmail.com</li>
                     </ul>
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
                  <div class="col-md-8">
                     <div class="map">
                        <figure><img src="{{ asset('images/map.png') }}" alt="#"/></figure>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2023 All Rights Reserved. qbitsinc.com</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
      <script>
         function openNav() {
           document.getElementById("mySidepanel").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
         }
      </script>
   </body>
</html>

