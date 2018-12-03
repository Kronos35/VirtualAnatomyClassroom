@extends('layouts.lists')
@section('card-header')
Lectures' List
@endsection

@section('instance_body')
    @foreach ($lectures as $lecture)
        <tr>
          <td>{{Str_limit($lecture->title, $limit = 80, $end = '...')}}</td>
          <td>{{Str_limit(strip_tags($lecture->body), $limit = 80, $end = '...') }} </td>
          <td>
            <a href="{{$controllerUrl}}/{{$lecture->id}}/edit">Edit</a>
            /
            <a href="{{$controllerUrl}}/{{$lecture->id}}">View</a>
            /
            <a onclick="document.getElementById('delete{{$lecture->id}}').submit();">Delete</a>
            <form id="delete{{$lecture->id}}" action="{{ $controllerUrl }}/{{$lecture->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>
          </td>
        </tr>
    @endforeach
@endsection
@section('pagination')
{{$lectures->render()}}
@endsection