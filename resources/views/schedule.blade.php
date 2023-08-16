@extends('layouts.app')
@section('sub_title') Schedule @endsection

@section('head')
    @include('layouts.partials.head')
@stop
@section('header')
    @include('layouts.partials.header')
@endsection
@section('contents')
    @include('layouts.partials.titlepage', ['title' => 'Schedule'])
    @include('home.schedule')
@endsection
@section('footer')
    @include('layouts.partials.footer')
@endsection
@section('foot')
    @include('layouts.partials.foot')
@endsection
