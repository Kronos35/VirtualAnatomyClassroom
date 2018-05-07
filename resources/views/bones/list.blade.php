@extends('layouts.lists')
@section('card-header')
Bones' List
@endsection

@section('body')
    @if(isset($bones))
    @foreach ($bones as $bone)
        <tr>
            <td>{{$bone->name}}</td>
            <td></td>
            <td>
            <a href="{{$controllerUrl}}/{{$bone->id}}/edit">Edit</a>
            /
            <a href="{{$controllerUrl}}/{{$bone->id}}">View</a>
            /
            <a onclick="document.getElementById('delete{{$bone->id}}').submit();">Delete</a>
            <form id="delete{{$bone->id}}" action="{{ $controllerUrl }}/{{$bone->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>
            </td>
        </tr>
    @endforeach
    @endif
@endsection
