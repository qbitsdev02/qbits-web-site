@extends('template')

@section('title', 'Qbits | About')

@section('banner_title')  
   {{ Str::upper(__('about_title')) }}
@endsection

@section('about_section_secundary_image')
   <img src="{{ asset('images/about.png') }}" alt="#"/>
@endsection

@section('about_section_secundary_title')
   {{ __('about_title') }}
@endsection

@section('about_section_secundary_description')
   {!! __('about.about_description_detail') !!}
@endsection