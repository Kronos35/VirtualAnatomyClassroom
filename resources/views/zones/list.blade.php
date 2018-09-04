@extends('layouts.lists')

@section('card-header')
    {{$controllerTitle}} list
@endsection

@section('instance_body')
    @foreach ($zones as $zone)
        <tr>
            <td>{{$zone->name}}</td>
            <td>{{Str_limit($zone->description, $limit = 80, $end = '...') }} </td>
            <td>
            @if((Auth::user())->can('create articles'))
            <a href="{{$controllerUrl}}/{{$zone->id}}/edit">Edit</a>
            /
            @endif
            <a href="{{$controllerUrl}}/{{$zone->id}}">View</a>
            @if((Auth::user())->can('create articles'))
            /
            <a onclick="document.getElementById('delete{{$zone->id}}').submit();">Delete</a>
            <form id="delete{{$zone->id}}" action="{{ $controllerUrl }}/{{$zone->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>
            @endif
            </td>
        </tr>
    @endforeach
@endsection
@section('pagination')
{{$zones->render()}}
@endsection