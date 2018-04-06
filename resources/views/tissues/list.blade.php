@extends('layouts.lists')

@section('card-header')
Tissue's list
@endsection

@section('body')
    @foreach ($tissues as $tissue)
        <div class="row">
            <div class="col col-md-10">{{$tissue->name}}</div>
            <div class="col col-md-2">
                <a href="{{$controllerUrl}}/{{$tissue->id}}/edit">Edit</a>
                /
                <a href="{{$controllerUrl}}/{{$tissue->id}}">View</a>
                /
                <form id="delete{{$tissue->id}}" action="{{ $controllerUrl }}/{{$tissue->id}}" method="POST">
				    {{ method_field('DELETE') }}
				    {{ csrf_field() }}
				    <a onclick="document.getElementById('delete{{$tissue->id}}').submit();">Delete</a>
				</form>

            </div>
        </div>
    @endforeach
@endsection