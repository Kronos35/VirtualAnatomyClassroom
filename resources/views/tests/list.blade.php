@extends('layouts.lists')
@section('card-header')
Tests' List
@endsection

@section('instance_body')
  @foreach ($tests as $test)
    <tr>
      <td>{{Str_limit(strip_tags($test->title), $limit = 80, $end = '...')}}</td>
      <td>{{Str_limit(strip_tags($test->description), $limit = 80, $end = '...') }} </td>
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