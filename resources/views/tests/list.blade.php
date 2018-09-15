@extends('layouts.lists')
@section('card-header')
Tests' List
@endsection

@section('instance_body')
  @foreach ($tests as $test)
    <tr>
      <td>{{$test->name}}</td>
      <td>{{Str_limit($test->description, $limit = 80, $end = '...') }} </td>
      <td>
        <a href="{{$controllerUrl}}/{{$test->id}}/edit">Edit</a>
        /
        <a href="{{$controllerUrl}}/{{$test->id}}">View</a>
        /
        <a onclick="document.getElementById('delete{{$test->id}}').submit();">Delete</a>
        <form id="delete{{$test->id}}" action="{{ $controllerUrl }}/{{$test->id}}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
        </form>
      </td>
      </tr>
  @endforeach
@endsection
@section('pagination')
{{$tests->render()}}
@endsection