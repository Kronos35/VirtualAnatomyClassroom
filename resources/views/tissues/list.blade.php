@extends('layouts.lists')

@section('card-header')
    {{$controllerTitle}} list
@endsection

@section('body')
    @foreach ($tissues as $tissue)
        <tr>
            <td>{{$tissue->name}}</td>
            <td>{{Str_limit($tissue->description, $limit = 80, $end = '...') }} </td>
            <td>
            @if((Auth::user())->can('create articles'))
            <a href="{{$controllerUrl}}/{{$tissue->id}}/edit">Edit</a>
            /
            @endif
            <a href="{{$controllerUrl}}/{{$tissue->id}}">View</a>
            @if((Auth::user())->can('create articles'))
            /
            <a onclick="document.getElementById('delete{{$tissue->id}}').submit();">Delete</a>
            <form id="delete{{$tissue->id}}" action="{{ $controllerUrl }}/{{$tissue->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>
            @endif
            </td>
        </tr>
    @endforeach
@endsection