@extends('layouts.lists')
@section('card-header')
Tissue Type's List
@endsection

@section('instance_body')
    @foreach ($tissueTypes as $tissueType)
        <tr>
          <td>{{$tissueType->name}}</td>
          <td>{{Str_limit($tissueType->description, $limit = 80, $end = '...') }} </td>
          <td>
            <a href="{{$controllerUrl}}/{{$tissueType->id}}/edit">Edit</a>
            /
            <a href="{{$controllerUrl}}/{{$tissueType->id}}">View</a>
            /
            <a onclick="document.getElementById('delete{{$tissueType->id}}').submit();">Delete</a>
            <form id="delete{{$tissueType->id}}" action="{{ $controllerUrl }}/{{$tissueType->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>
          </td>
        </tr>
    @endforeach
@endsection
