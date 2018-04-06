@extends('layouts.lists')

@section('card-header')
Bones' List
@endsection

@section('body')
    @foreach ($bones as $bone)
        <div class="row">
            <div class="col col-md-10">{{$bone->name}}</div>
            <div class="col col-md-2">
                <a href="{{$controllerUrl}}/{{$bone->id}}/edit">Edit</a>/<a href="{{$controllerUrl}}/{{$bone->id}}">View</a>
            </div>
        </div>
    @endforeach
@endsection
