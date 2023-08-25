@extends('template')

@section('title', 'Qbits | home')

@section('banner_title')
   "{{ __('banner_title') }}"
@endsection

@section('banner_image')
   <img class="image_desktop" src="{{ asset('images/Qbits.png') }}" alt="Qbits inc technology"/>
@endsection

@section('about_section_secundary_image')
   <img src="{{ asset('images/about.png') }}" alt="#"/>
@endsection

@section('about_section_secundary_title')
   {{ __('about_title') }}
@endsection

@section('about_section_secundary_description')
   {{ __('about_description') }}
@endsection


@section('about_section_secundary_read_more')
   <a class="read_more" href="{{ route('about') }}">{{ __('read_more') }}</a>
@endsection

@section('why_us_main')
<div id="why_us" class="service">
   <div class="container">
         <div class="row">
         <div class="col-md-10 offset-md-1">
            <div class="titlepage">
               <h2>{{ __('why_us') }}</h2>
               <p>{{ __('why_us_description_cost') }}</p>
               <p>{{ __('why_us_description_Professionalism') }}</p>
               <p>{{ __('why_us_description_soport') }}</p>
               
            </div>
         </div>
         </div>
         <div class="row desktop">
         <div class="col-md-12">
            <div class="service_main">
               <div class="service_box yell_colo">
                     <i><img src="{{ asset('images/Idea.jpg') }}" alt="Customized Solutions at Affordable Costs"/></i>
                     <h4>{{ __('idea') }}</h4>
               </div>
               <div class="service_box yelldark_colo">
                     <i><img src="{{ asset('images/Digital_transformation.jpg') }}" alt=""/></i>
                     <h4>{{ __('digital') }}</h4>
               </div>
               <div class="service_box yell_colo">
                     <i><img src="{{ asset('images/Professionalism.jpg') }}" alt="Expertise and Professionalism"/></i>
                     <h4>{{ __('profesional') }}</h4>
               </div>
               <div class="service_box yelldark_colo">
                     <i><img src="{{ asset('images/Constant_Innovation.jpg') }}" alt="Constant Innovation"/></i>
                     <h4>{{ __('innovation') }}</h4>
               </div>
               <div class="service_box yell_colo">
                     <i><img src="{{ asset('images/soport.jpg') }}" alt="soport"/></i>
                     <h4>{{ __('soport') }}</h4>
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
               <h4>{{ __('idea') }}</h4>
            </div>
            <div class="service_box yelldark_colo">
               <i><img src="{{ asset('images/Professionalism.jpg') }}" alt="Expertise and Professionalism"/></i>
               <h4>{{ __('profesional') }}</h4>
            </div>
            <div class="service_box yell_colo">
               <i><img src="{{ asset('images/soport.jpg') }}" alt="soport"/></i>
               <h4>{{ __('soport') }}</h4>
            </div>
         </div>
         </div>
   </div>
</div>
@endsection

@section('our_services')
<section id="servicess" class="vehicles">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>{{ __('our_services') }}</h2>
               <p>
                  {{ __('our_services_description') }}
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
               <p>
                  "{{ __('our_vission_description') }}"
               </p>
            </div>
         </div>
         <div class="col-md-5 offset-md-2">
            <div class="choose_box">
               <i><img src="{{ asset('images/why1.png') }}" alt="#"/></i>
               <h3>{{ __('our_mission') }}</h3>
               <p>
                  "{{ __('our_mission_description') }}"
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection