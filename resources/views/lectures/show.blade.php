@extends('layouts.show-layout')

@section('card-header')
    {{$lecture->title}} 
    <br>
    <small>by: <b>{{$lecture->author_name()}}</b></small>
@endsection

@section('edit-button')
<a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/{{$lecture->id}}/edit">Edit</a>
@endsection

@section('instance_body')
    <h4>Description: </h4> 
    {!!$lecture->body!!}
    <br>
@endsection
