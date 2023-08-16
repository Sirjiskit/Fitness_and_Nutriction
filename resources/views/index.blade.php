@extends('layouts.app')
@section('sub_title') Home @endsection

@section('head')
    @include('layouts.partials.head')
@stop
@section('header')
    @include('layouts.partials.header')
@endsection
@section('contents')
   @include('home.slider')
   @include('home.about')
   @include('home.servies')
   @include('home.knowmore')
   @include('home.gallary')
   @include('home.schedule')
   @include('home.contact')
   @include('home.blog')
@endsection
@section('footer')
    @include('layouts.partials.footer')
@endsection
@section('foot')
    @include('layouts.partials.foot')
@endsection
