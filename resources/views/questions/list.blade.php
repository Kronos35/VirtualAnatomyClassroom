@extends('layouts.lists')
@section('card-header')
Questions' List
@endsection

@section('instance_body')
    @foreach ($questions as $question)
        <tr>
          <td>{{$question->name}}</td>
          <td>{{Str_limit($question->description, $limit = 80, $end = '...') }} </td>
          <td>
            <a href="{{$controllerUrl}}/{{$question->id}}/edit">Edit</a>
            /
            <a href="{{$controllerUrl}}/{{$question->id}}">View</a>
            /
            <a onclick="document.getElementById('delete{{$question->id}}').submit();">Delete</a>
            <form id="delete{{$question->id}}" action="{{ $controllerUrl }}/{{$question->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>
          </td>
        </tr>
    @endforeach
@endsection
@section('pagination')
{{$questions->render()}}
@endsection