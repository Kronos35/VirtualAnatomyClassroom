@extends('layouts.lists')

@section('card-header')
    Muscles' List
@endsection

@section('body')
    @foreach ($muscles as $muscle)
		<tr>
			<td>{{$muscle->name}}</td>
			<td></td>
			<td>
			<a href="{{$controllerUrl}}/{{$muscle->id}}/edit">Edit</a>
			/
			<a href="{{$controllerUrl}}/{{$muscle->id}}">View</a>
			/
			<a onclick="document.getElementById('delete{{$muscle->id}}').submit();">Delete</a>
			<form id="delete{{$muscle->id}}" action="{{ $controllerUrl }}/{{$muscle->id}}" method="POST">
			    {{ method_field('DELETE') }}
			    {{ csrf_field() }}
			</form>
			</td>
        </tr>
    @endforeach
@endsection
