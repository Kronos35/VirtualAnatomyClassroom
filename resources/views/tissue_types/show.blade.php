@extends('layouts.show-layout')

@section('card-header')
    {{$tissueType->name}}
@endsection

@section('edit-button')
<a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/{{$tissueType->id}}/edit">Edit</a>
@endsection

@section('instance_body')
    <h4>Description: </h4>
    {{$tissueType->description}}
    <br>
    <br>
    @if(isset($tissueType->tissue_type))
    <h4>Type: </h4>
    <a href="{{ URL::to($controllerUrl) }}/{{$tissueType->tissue_type->id}}">{{$tissueType->tissue_type->name}}</a>
    @endif
@endsection
