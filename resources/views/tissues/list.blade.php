@extends('layouts.lists')

@section('card-header')
    Tissue's list
@endsection

@section('body')
    @foreach ($tissues as $tissue)
        <tr>
            <td>{{$tissue->name}}</td>
            <td></td>
            <td>
            <a href="{{$controllerUrl}}/{{$tissue->id}}/edit">Edit</a>
            /
            <a href="{{$controllerUrl}}/{{$tissue->id}}">View</a>
            /
            <a onclick="document.getElementById('delete{{$tissue->id}}').submit();">Delete</a>
            <form id="delete{{$tissue->id}}" action="{{ $controllerUrl }}/{{$tissue->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>
            </td>
        </tr>
    @endforeach
@endsection