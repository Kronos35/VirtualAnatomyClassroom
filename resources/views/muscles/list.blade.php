@extends('layouts.lists')

@section('card-header')
    Muscles' List
@endsection

@section('body')
    @foreach ($muscles as $muscle)
        <div class="row">
            <div class="col col-md-10">{{$muscle->name}}</div>
            <div class="col col-md-2">
                <a href="{{$controllerUrl}}/{{$muscle->id}}/edit">Edit</a>/<a href="{{$controllerUrl}}/{{$muscle->id}}">View</a>
            </div>
        </div>
    @endforeach
@endsection
