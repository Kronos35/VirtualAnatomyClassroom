@extends('layouts.lists')

@section('card-header')
    {{$controllerTitle}} list
@endsection

@section('body')
    @foreach ($groups as $group)
        <tr>
            <td>{{$group->name}}</td>
            <td>{{Str_limit($group->description, $limit = 80, $end = '...') }} </td>
            <td>
            @if((Auth::user())->can('create articles'))
            <a href="{{$controllerUrl}}/{{$group->id}}/edit">Edit</a>
            /
            @endif
            <a href="{{$controllerUrl}}/{{$group->id}}">View</a>
            @if((Auth::user())->can('create articles'))
            /
            <a onclick="document.getElementById('delete{{$group->id}}').submit();">Delete</a>
            <form id="delete{{$group->id}}" action="{{ $controllerUrl }}/{{$group->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>
            @endif
            </td>
        </tr>
    @endforeach
@endsection