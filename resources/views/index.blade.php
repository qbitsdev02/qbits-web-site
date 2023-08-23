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

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,700&display=swap" rel="stylesheet">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <script src="https://kit.fontawesome.com/d9e42506e1.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
      
   </head>
   <!-- body -->
   <body class="main-layout">
      <span class="ir-arriba desktop mobile">
         <i class="fa-solid fa-circle-up" style="color: #3b0663;font-size: 30px;padding-top: 10px;"></i>
      </span>
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('images/loading.png') }}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <img src="{{ asset('images/loading.png') }}" alt="Qbits inc" style="padding: 5% 20%;">
         <a href="{{ route('home') }}"> <i class="fa fa-solid fa-house" style="color: #e17900;" aria-hidden="true"></i> <span>Home </span></a>
         <a href="#about" onclick="closeNav()"> <i class="fa-solid fa-user" style="color: #e17900;" aria-hidden="true"></i> <span>About</span></a>
         <a href="#why_us" onclick="closeNav()"><i class="fa-solid fa-question" style="color: #e17900;"></i> <span>Why us?</span></a>
         <a href="#contact" onclick="closeNav()"><i class="fa-solid fa-envelope" style="color: #e17900;"></i> <span>Contact</span> </a>
         <div class="division"></div>
         <div class="rrss_sidebar">
            <a href="" target="_blank">
               <i class="fa-brands fa-facebook" style="color: #ff7900;"></i>                           
            </a>
            <a href="https://www.instagram.com/qbitsdev/" target="_blank">
               <i class="fa-brands fa-instagram" style="color: #ff7900;"></i>                           
            </a>
         </div>
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
                        <a class="desktop" href="">
                           <i class="fa-brands fa-facebook" style="color: #f5f3f2;"></i>                           
                        </a>
                        <a class="desktop" href="https://www.instagram.com/qbitsdev/">
                           <i class="fa-brands fa-instagram" style="color: #f5f3f2;"></i>                           
                        </a>
                        <button class="openbtn" onclick="openNav()">
                           <img class="desktop" src="{{ asset('images/menu_icon.png') }}" alt="#"/>
                           <img class="movil" src="{{ asset('images/menu_icon_black.png') }}" alt="#"/>
                        </button> 
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
         <div class="bg_img"></div>
         <div class="header_banner text-center">
            <div class="text-bg text-center">
               <h1>
                  "Technological Solutions Within Reach of Everyone"
               </h1>
            </div>
            <div class="ban_track">
               <figure><img class="image_desktop" src="{{ asset('images/track.png') }}" alt="#" style="width: 300px;"/></figure>
            </div>
         </div>
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
                                 <h1>
                                    "Technological Solutions Within Reach of Everyone"
                                 </h1>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-7">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="ban_track">
                                       <figure><img class="image_desktop" src="{{ asset('images/track.png') }}" alt="Q bits inc Dev"/></figure>
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
                     <p>
                        Welcome to <b>Q bits inc dev</b>, We're tech enthusiasts providing affordable solutions to small businesses, making technology accessible to all. Our custom solutions drive efficiency and success. Our team of experts will guide you through the digital transformation journey. Join us and discover how we can enhance your business. 
                     </p>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <!-- service section -->
      <div id="why_us" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Why us?</h2>
                     <p><b>Customized Solutions at Costs:</b> We understand that every business is unique and has specific needs. Our solutions are tailor-made to meet your company's individual requirements. The best part is, we do this at an affordable cost, allowing you to benefit from top-notch solutions without exceeding your budget.</p>
                     <p><b>Expertise and Professionalism: </b> We have a team of technology enthusiasts with extensive experience in developing solutions for small businesses. Our dedication ensures you'll receive professional service and results that drive your business forward. From conceptualization to implementation, we stand by your side every step of the way.</p>
                     <p><b>Simplified Digital Transformation: </b> Technology is crucial in today's business world. By opting for our services, you're taking a significant step towards digital transformation. We provide you with the tools and strategies needed to enhance operational efficiency, boost productivity, and stand out in the market. Our mission is to pave the way for success in the digital age.</p>
                  </div>
               </div>
            </div>
            <div class="row desktop">
               <div class="col-md-12">
                  <div class="service_main">
                     <div class="service_box yell_colo">
                        <i><img src="{{ asset('images/Idea.jpg') }}" alt="Customized Solutions at Affordable Costs"/></i>
                        <h4>Idea</h4>
                     </div>
                     <div class="service_box yelldark_colo">
                        <i><img src="{{ asset('images/Digital_transformation.jpg') }}" alt=""/></i>
                        <h4>Digital</h4>
                     </div>
                     <div class="service_box yell_colo">
                        <i><img src="{{ asset('images/Professionalism.jpg') }}" alt="Expertise and Professionalism"/></i>
                        <h4>Professionalism</h4>
                     </div>
                     <div class="service_box yelldark_colo">
                        <i><img src="{{ asset('images/Constant_Innovation.jpg') }}" alt="Constant Innovation"/></i>
                        <h4>Innovation</h4>
                     </div>
                     <div class="service_box yell_colo">
                        <i><img src="{{ asset('images/soport.jpg') }}" alt="soport"/></i>
                        <h4>Soport</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="row movil">
            <div class="col-md-12">
               <div class="service_main">
                  <div class="service_box yell_colo">
                     <i><img src="{{ asset('images/Idea.jpg') }}" alt="Customized Solutions at Affordable Costs"/></i>
                     <h4>Idea</h4>
                  </div>
                  <div class="service_box yelldark_colo">
                     <i><img src="{{ asset('images/Professionalism.jpg') }}" alt="Expertise and Professionalism"/></i>
                        <h4>Professionalism</h4>
                  </div>
                  <div class="service_box yell_colo">
                     <i><img src="{{ asset('images/soport.jpg') }}" alt="soport"/></i>
                        <h4>Soport</h4>
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
                     <h2>Our Services</h2>
                     <p>
                        At <b>Q bits inc dev</b>, we believe that technology should not be limited to a select few. That's why we've crafted innovative, affordable, and easily accessible solutions that are within everyone's reach. With our budget-friendly subscription, you'll gain full access to our advanced tools, designed to transform your business without straining your budget.
                     </p>
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
            </div>
            {{-- <a class="carousel-control-prev" href="#veh" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#veh" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a> --}}
         </div>
      </section>
      <!-- end vehicles section -->
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
                     <p>
                        "At <b>Q bits inc dev</b>, our vision is to make technology a resource within everyone's reach. We create and develop innovative solutions that empower businesses, regardless of their size. We take pride in offering technological excellence at a cost that makes growth and success achievable for all."
                     </p>
                  </div>
               </div>
               <div class="col-md-5 offset-md-2">
                  <div class="choose_box">
                     <i><img src="{{ asset('images/why1.png') }}" alt="#"/></i>
                     <h3>Our mission</h3>
                     <p>
                        At <b>Q bits inc dev</b>, our mission is to demystify technology for businesses of all sizes. Through innovative and affordable solutions, we empower our clients to thrive in an ever-changing digital world. We drive growth, efficiency, and success at every step.
                     </p>
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
                     <h2>Request a Call on Your Behalf</h2>
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
                        <li>
                           <i class="fa fa-map-marker" style="color: #ff7900;" aria-hidden="true"></i>
                           <a>Florida, Miami, 150 Se 2nd Ave Ste 300</a>
                        </li>
                        <li><i class="fa fa-phone" style="color: #ff7900;" aria-hidden="true"></i>
                           <a href="https://api.whatsapp.com/send/?phone=17865719783&text=Hello,%20I%20would%20like%20to%20know%20about%20your%20services&type=phone_number&app_absent=0" target="_blank">+1 7865719783</a>
                        </li>
                        <li>
                           <i class="fa fa-envelope" style="color: #ff7900;" aria-hidden="true"></i>
                           <a href="mailto:contactus@qbitsinc.com">contactus@qbitsinc.com</a>
                        </li>
                        <li style="display: block">
                           <i class="fa fa-solid fa-globe" style="color: #ff7900;"></i>
                           <a >Principal</a>
                        </li>
                     </ul>
                     {{-- <form class="bottom_form">
                         no de momento, puedes escribir al correo si desea informaciòn
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form> --}}
                  </div>
                  <div class="col-md-4">
                     <ul class="location_icon">
                        <li>
                           <i class="fa fa-map-marker" style="color: #ff7900;" aria-hidden="true"></i>
                           <a>Anzoátegui, Lechería, Av. Principal de Lechería.
                              Centro Empresarial Y2K. Piso 1- Oficina 1-2</a>
                        </li>
                        <li><i class="fa fa-phone" style="color: #ff7900;" aria-hidden="true"></i>
                           <a href="https://api.whatsapp.com/send/?phone=584248675340&text=hola%20me%20gustaria%20saber%20de%20sus%20servicio&type=phone_number&app_absent=0" target="_blank">+58 424-8675340</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <div class="map">
                        <div class="bg_maps">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.9290299041622!2d-80.19312332387068!3d25.77290760814072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b69c4a40298d%3A0x98ca6dd47456810d!2s150%20SE%202nd%20Ave%20Ste%20300%2C%20Miami%2C%20FL%2033131%2C%20EE.%20UU.!5e0!3m2!1ses!2sve!4v1692803903513!5m2!1ses!2sve" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        {{-- <figure><img src="{{ asset('images/map.png') }}" alt="#"/></figure> --}}
                     </div>
                  </div>
               </div>
            </div>
            <div class="rrss">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <i class="fa-brands fa-facebook" style="color: #ff7900;"></i>
                        <a href="https://www.instagram.com/qbitsdev/" target="_blank">
                           <i class="fa-brands fa-instagram" style="color: #ff7900;"></i>                           
                        </a>
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
      <script src="{{ asset('js/menu_fixed.js') }}"></script>
      <script src="{{ asset('js/buton_up.js') }}"></script>
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

