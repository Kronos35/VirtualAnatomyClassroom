@extends('layouts.create-layout')

@section('card-header')
    @if(isset($record))
        Update Test
    @else
        Create New Test
    @endif
@endsection

@section('instance_body')
    @include('layouts.partials.tests_form')
@endsection

