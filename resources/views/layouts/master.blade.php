@extends('adminlte::page')
@section('title', config('app.name'))
@section('css')
@yield('instance_css')
<link rel="stylesheet" type="text/css" href="{{asset('fonts/anatomy/font/flaticon.css')}}">
@endsection
@section('content_header')
  @yield('layout_header')
@endsection
@section('content')
  @yield('layout_content')
@endsection