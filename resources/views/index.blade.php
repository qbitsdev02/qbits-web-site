@extends('template')

@section('title', 'Qbits | home')

@section('banner_title')
   "{!! __('banner_title') !!}"
@endsection

@section('banner_image')
   <img class="image_desktop" src="{{ asset('images/Qbits.png') }}" alt="Qbits inc technology"/>
@endsection

@section('about_section_secundary_image')
   <img class="about_image" src="{{ asset('images/about.png') }}" alt="#"/>
@endsection

@section('about_section_secundary_title')
   {{ __('about_title') }}
@endsection

@section('about_section_secundary_description')
   {!! __('about_description') !!}
@endsection


@section('about_section_secundary_read_more')
   <a class="read_more" href="{{ route('about') }}">{{ __('read_more') }}</a>
@endsection

@section('why_us_main')
<div id="why_us" class="service ">
   <div class="container text-justify">
         <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>{{ __('why_us') }}</h2>
               <p class="text-justify">{!! __('why_us_description_cost') !!}</p>
               <p class="text-justify">{!! __('why_us_description_Professionalism') !!}</p>
               <p class="text-justify">{!! __('why_us_description_soport') !!}</p>
               
            </div>
         </div>
         </div>
         <div class="row desktop">
         <div class="col-md-12">
            <div class="service_main">
               <div class="service_box ">
                     <i><img src="{{ asset('images/why_us/idea.png') }}" alt="Customized Solutions at Affordable Costs"/></i>
                     <h4>{{ __('idea') }}</h4>
               </div>
               <div class="service_box ">
                     <i><img src="{{ asset('images/why_us/professional.png') }}" alt=""/></i>
                     <h4>{{ __('digital') }}</h4>
               </div>
               <div class="service_box ">
                     <i><img src="{{ asset('images/why_us/innovation.png') }}" alt="Expertise and Professionalism"/></i>
                     <h4>{{ __('profesional') }}</h4>
               </div>
               <div class="service_box ">
                  <i><img src="{{ asset('images/why_us/soport.png') }}" alt="soport"/></i>
                  <h4>{{ __('soport') }}</h4>
               </div>
            </div>
         </div>
         </div>
   </div>

   <div class="row movil">
         <div class="col-md-12">
         <div class="service_main">
            <div class="service_box">
               <i><img src="{{ asset('images/why_us/idea.png') }}" alt="Customized Solutions at Affordable Costs"/></i>
               <h4>{{ __('idea') }}</h4>
            </div>
            <div class="service_box">
               <i><img src="{{ asset('images/why_us/professional.png') }}" alt="Expertise and Professionalism"/></i>
               <h4>{{ __('profesional') }}</h4>
            </div>
            <div class="service_box">
               <i><img src="{{ asset('images/why_us/soport.png') }}" alt="soport"/></i>
               <h4>{{ __('soport') }}</h4>
            </div>
         </div>
         </div>
   </div>
</div>
@endsection

@section('our_services')
<section id="services" class="vehicles">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>{{ __('our_services') }}</h2>
               <p class="text-justify">{!! __('our_services_description') !!}</p>
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
            <div class="container text-center">
               <div class="carousel-caption">
                  <div class="row align-items-center">
                     <div class="col-md-4">
                        <div class="our_services">
                           <figure><img src="{{ asset('images/services/web_site.svg') }}" alt="#"/></figure>
                           
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="our_services">
                           <figure><img src="{{ asset('images/services/mobile_app.svg') }}" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="our_services">
                           <figure><img src="{{ asset('images/services/developer.svg') }}" alt="#"/></figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

@section('choose')
<div class="choose">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>{{ __('why_choose_us') }}</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-5">
            <div class="choose_box">
               <i><img src="{{ asset('images/why1.png') }}" alt="#"/></i>
               <h3>{{ __('our_vission') }}</h3>
               <p class="text-justify">"{!! __('our_vission_description') !!}"</p>
            </div>
         </div>
         <div class="col-md-5 offset-md-2">
            <div class="choose_box">
               <i><img src="{{ asset('images/why1.png') }}" alt="#"/></i>
               <h3>{{ __('our_mission') }}</h3>
               <p class="text-justify">"{!! __('our_mission_description') !!}"</p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection