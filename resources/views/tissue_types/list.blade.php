@extends('layouts.lists')
@section('card-header')
Tissue Type's List
@endsection

@section('body')
    @foreach ($tissueTypes as $tissueType)
        <div class="row">
            <div class="col col-md-9">{{$tissueType->name}}</div>
            <div class="col col-md-3">
                <a href="{{$controllerUrl}}/{{$tissueType->id}}/edit">Edit</a>
                /
                <a href="{{$controllerUrl}}/{{$tissueType->id}}">View</a>
                /
                <a onclick="document.getElementById('delete{{$tissueType->id}}').submit();">Delete</a>
                <form id="delete{{$tissueType->id}}" action="{{ $controllerUrl }}/{{$tissueType->id}}" method="POST">
				    {{ method_field('DELETE') }}
				    {{ csrf_field() }}
				</form>
            </div>
        </div>
    @endforeach
@endsection
