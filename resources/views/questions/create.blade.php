@extends('layouts.create-layout')

@section('card-header')
    @if(isset($record))
        Update Question
    @else
        Create New Question
    @endif
@endsection

@section('instance_body')
    @include('layouts.partials.questions_form')
@endsection

