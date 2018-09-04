@extends('layouts.show-layout')

@section('card-header')
    {{$zone->name}}
@endsection

@section('edit-button')
<a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/{{$zone->id}}/edit">Edit</a>
@endsection

@section('instance_body')
    <h4> Content: </h4>
    {{$zone->content}}
    <br>
    <br>
    <h4>Description: </h4>
    {{$zone->description}}
    <br>
    <br>
@endsection
