@extends('layouts.show-layout')

@section('card-header')
    {{$tissue->name}}
@endsection

@section('edit-button')
<a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/{{$tissue->id}}/edit">Edit</a>
@endsection

@section('instance_body')
    <h4> Content: </h4>
    {{$tissue->content}}
    <br>
    <br>
    <h4>Description: </h4>
    {{$tissue->description}}
    <br>
    <br>
    <h4>Type: </h4>
    <a href="/tissue_types/{{$tissue->tissue_type->id}}">{{$tissue->tissue_type->name}}</a>
@endsection
