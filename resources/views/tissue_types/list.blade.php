@extends('layouts.lists')
@section('card-header')
Tissue Type's List
@endsection

@section('body')
    @foreach ($tissueTypes as $tissueType)
        <div class="row">
            <div class="col col-md-10">{{$tissueType->name}}</div>
            <div class="col col-md-2">
                <a href="{{$controllerUrl}}/{{$tissueType->id}}/edit">Edit</a>/<a href="{{$controllerUrl}}/{{$tissueType->id}}">View</a>
                /
                <form id="delete{{$tissueType->id}}" action="{{ $controllerUrl }}/{{$tissueType->id}}" method="POST">
				    {{ method_field('DELETE') }}
				    {{ csrf_field() }}
				    <a onclick="document.getElementById('delete{{$tissueType->id}}').submit();">Delete</a>
				</form>
            </div>
        </div>
    @endforeach
@endsection
