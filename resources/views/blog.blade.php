@extends('layouts.app')
@section('sub_title') Blog @endsection

@section('head')
    @include('layouts.partials.head')
@stop
@section('header')
    @include('layouts.partials.header')
@endsection
@section('contents')
    @include('layouts.partials.titlepage', ['title' => 'Blog'])
    @include('home.blog')
@endsection
@section('footer')
    @include('layouts.partials.footer')
@endsection
@section('foot')
    @include('layouts.partials.foot')
@endsection
