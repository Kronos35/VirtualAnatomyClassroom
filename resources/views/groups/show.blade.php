@extends('layouts.show-layout')

@section('card-header')
    {{$group->name}}
@endsection

@section('edit-button')
<a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/{{$group->id}}/edit">Edit</a>
@endsection

@section('body')
<div class="container">
    <h4> Content: </h4>
    {{$group->content}}
    <br>
    <br>
    <h4>Description: </h4>
    {{$group->description}}
    <br>
    <br>
</div>
@endsection
