<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>@yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      
      {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,700&display=swap" rel="stylesheet"> --}}
      
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">


      <script src="https://kit.fontawesome.com/d9e42506e1.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
      <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="789b48ba-96a9-47ed-a60f-b62de0b9ab15";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
   </head>
   <body class="main-layout">
      <span class="ir-arriba desktop mobile">
         <i class="fa-solid fa-chevron-up" style="color: rgb(255, 121, 0);font-size: 30px;padding-top: 10px;"></i>
      </span>
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('images/logo/loading.png') }}"/></div>
      </div>
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <img src="{{ asset('images/logo/qbits_white.png') }}" alt="Qbits inc" style="padding: 5% 20%;">
         <a href="{{ route('home') }}"> <i class="fa fa-solid fa-house" style="color: #e17900;" aria-hidden="true"></i> <span>{{ __('home') }}</span></a>
         <a href="{{ request()->is('/about') ? '/#about' : '/about' }}" onclick="closeNav()"> <i class="fa-solid fa-user" style="color: #e17900;" aria-hidden="true"></i> <span>{{ __('about') }}</span></a>
         <a href="#why_us" onclick="closeNav()"><i class="fa-solid fa-question" style="color: #e17900;"></i> <span>{{ __('why_us') }}</span></a>
         <a href="#services" onclick="closeNav()"><i class="fa-solid fa-display" style="color: #e17900;"></i> <span>{{ __('services') }}</span></a>
         <a href="#" onclick="closeNav()"><i class="fa-solid fa-newspaper" style="color: #e17900;"></i> <span>{{ __('blog') }}</span> </a>
         <a href="#contact" onclick="closeNav()"><i class="fa-solid fa-envelope" style="color: #e17900;"></i> <span>{{ __('contact') }}</span> </a>
         <div class="division"></div>
         <div class="rrss_sidebar">
            <div class="row">
               <div class="col-sm-12">
                  <div class="btn_redes">
                     <a href="" target="_blank">
                        <i class="fa-brands fa-facebook btn_redes_icon"></i>
                     </a>
                     <a href="https://www.instagram.com/qbitsdev/" target="_blank">
                        <i class="fa-brands fa-instagram btn_redes_icon"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-4">
                     <div class="logo">
                        <a href="{{ route('home')}}"><img src="{{ asset('images/logo/qbits_white.png') }}" alt="#" style="width: 150px;"/></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-8">
                     <div class="right_bottun">
                        <a class="desktop" href="">
                           <i class="fa-brands fa-facebook" style="color: #f5f3f2;"></i>                           
                        </a>
                        <a class="desktop" href="https://www.instagram.com/qbitsdev/" target="_blank">
                           <i class="fa-brands fa-instagram" style="color: #f5f3f2;"></i>                           
                        </a>
                        <div class="dropdown show mobile_drop">
                              <i class="fa-solid fa-earth-americas" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="{{ route('change_language', 'es') }}" ><img class="bandera" src="{{ asset('images/icons/espana.png') }}" alt="español"/> {{ __('es') }} </a>
                              <a class="dropdown-item" href="{{ route('change_language', 'en') }}"><img class="bandera" src="{{ asset('images/icons/eeuu.png') }}" alt="ingles"/> {{ __('en') }}</a>
                           </div>
                        </div>
                        <button class="openbtn" onclick="openNav()">
                           <img class="desktops" src="{{ asset('images/icons/menu_icon.png') }}" alt="#"/>
                           {{-- <img class="movil" src="{{ asset('images/icons/menu_icon_black.png') }}" alt="#"/> --}}
                        </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <section class="banner_main">
         <div class="bg_img"></div>
         <div class="header_banner text-center">
            <div class="text-bg text-center">
               <h1>@yield('banner_title')</h1>
            </div>
            <div class="ban_qbits">
               <figure>@yield('banner_image')</figure>
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
                                 <h1>@yield('banner_title')</h1>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-7">
                              <div class="img_banner">
                                 <figure>@yield('banner_image')</figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      
      <div id="about" class="about text-justify">
         <div class="container pt-5">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="about_right">
                     <figure>@yield('about_section_secundary_image')</figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>@yield('about_section_secundary_title')</h2>
                     <p>@yield('about_section_secundary_description')</p>
                     @yield('about_section_secundary_read_more')
                     
                  </div>
               </div>
            </div>
         </div>
      </div>

      @yield('why_us_main')
      @yield('our_services')
      @yield('choose')

      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>{{ __('contact_title') }}</h2>
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="con_bg">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-5">
                     
                     <form id="form_contact_us" class="main_form" action="{{ route('send') }}" method="POST">
                        @csrf
                        <div class="row">
                           <div class="col-md-12 ">
                              {!! $errors->any() ? '<p class="message_error">'.$errors->first('name').'</p>' : '' !!}
                              <input class="contactus {{ $errors->any() ? 'danger' : '' }}" placeholder="{{ __('name') }}" type="text" name="name" value="{{ $errors->any() ? old('name') : '' }}">
                           </div>
                           <div class="col-md-12">
                              {!! $errors->any() ? '<p class="message_error">'.$errors->first('reason').'</p>' : '' !!}
                              <select class="contactus" name="reason" id="select">
                                 <option value="">{{ __('select_contact') }}</option>
                                 <option value="business">{{ __('business') }}</option>
                                 <option value="ask">{{ __('ask') }}</option>
                              </select>
                           </div>
                           <div class="col-md-12">
                              {!! $errors->any() ? '<p class="message_error">'.$errors->first('subject').'</p>' : '' !!}
                              <input class="contactus {{ $errors->any() ? 'danger' : '' }}" placeholder="{{ __('subject') }}" type="text" name="subject" value="{{ $errors->any() ? old('subject') : '' }}">
                           </div>
                           <div class="col-md-12">
                              {!! $errors->any() ? '<p class="message_error">'.$errors->first('email').'</p>' : '' !!}
                              <input class="contactus {{ $errors->any() ? 'danger' : '' }}" placeholder="{{ __('email') }}" type="mail" name="email" value="{{ $errors->any() ? old('email') : '' }}"> 
                           </div>
                           <div class="col-md-12">
                              {!! $errors->any() ? '<p class="message_error">'.$errors->first('phone_number').'</p>' : '' !!}
                              <input class="contactus {{ $errors->any() ? 'danger' : '' }}" placeholder="{{ __('phone_number') }}" type="text" name="phone_number" value="{{ $errors->any() ? old('phone_number') : '' }}">
                           </div>
                           <div class="col-md-12">
                              <textarea class="contactus contactus_textarea" placeholder="{{ __('write_message')}}" name="body">{{ $errors->any() ? old('body') : '' }}</textarea>
                           </div>
                           <div class="col-lg-6 col-md-12 col-sm-12">
                              <button type="submit" class="send_btn">{{ __('send') }}</button>
                           </div>
                           <div class="col-lg-6 col-md-12 col-sm-12">
                              <button type="reset" class="clean_btn">{{ __('clean') }}</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-7">
                     <div class="co_tru">
                        <figure><img src="{{ asset('images/logo/qbits_inc.png') }}" alt="#"/></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <div class="footer bottom_cross1">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <h1>{{ __('principal') }}</h1>
                     <ul class="location_icon">
                        <li>
                           <i class="fa fa-map-marker" style="color: #ff7900;" aria-hidden="true"></i>
                           <a>Florida, Miami, 150 Se 2nd Ave Ste 300</a>
                        </li>
                        <li>
                           <i class="fa-brands fa-whatsapp" style="color: #ff7900;"></i>
                           <a href="https://api.whatsapp.com/send/?phone=17865719783&text=Hello,%20I%20would%20like%20to%20know%20about%20your%20services&type=phone_number&app_absent=0" target="_blank">+1 7865719783</a>
                        </li>
                        <li>
                           <i class="fa fa-envelope" style="color: #ff7900;" aria-hidden="true"></i>
                           <a href="mailto:contactus@qbitsinc.com">contactus@qbitsinc.com</a>
                        </li>
                     </ul>
                     {{-- <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form> --}}
                  </div>
                  <div class="col-md-4">
                     <h1>{{ __('office') }}</h1>
                     <ul class="location_icon">
                        <li>
                           <i class="fa fa-map-marker" style="color: #ff7900;" aria-hidden="true"></i>
                           <a>Anzoátegui, Lechería, Av. Principal de Lechería.
                              Centro Empresarial Y2K. Piso 1- Oficina 1-2</a>
                        </li>
                        <li>
                           <i class="fa-brands fa-whatsapp" style="color: #ff7900;"></i>
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
                        <p>© {{ date('Y') }} {{ __('copyright') }}</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
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

