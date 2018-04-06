@extends('layouts.lists')

@section('card-header')
Tissue's list
@endsection

@section('body')
    @foreach ($tissues as $tissue)
        <div class="row">
            <div class="col col-md-10">{{$tissue->name}}</div>
            <div class="col col-md-2">
                <a href="{{$controllerUrl}}/{{$tissue->id}}/edit">Edit</a>/<a href="{{$controllerUrl}}/{{$tissue->id}}">View</a>
            </div>
        </div>
    @endforeach
@endsection