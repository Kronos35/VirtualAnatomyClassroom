@extends('layouts.create-layout')

@section('card-header')
    @if(isset($record))
        Update Lecture
    @else
        Create New Lecture
    @endif
@endsection

@section('instance_body')
    @include('layouts.partials.lectures_form')
@endsection

