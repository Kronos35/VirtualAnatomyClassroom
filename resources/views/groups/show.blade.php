@extends('layouts.show-layout')

@section('card-header')
  {{$group->name}}
@endsection

@section('edit-button')
  <a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/{{$group->id}}/edit">Edit</a>
@endsection

@section('body')
<div class="container">
  <div class="row">
    <h4>Description: </h4>
    {{$group->description}}
    <br>
    <br>
  </div>
  <div class="row">
    <div class="col-sm-3"><button class="btn btn-primary">Add Student</button></div>
    <div class="col-sm-3"><button class="btn btn-primary">Create Tests</button></div>
    <div class="col-sm-3"><button class="btn btn-primary">Create Class</button></div>
    <div class="col-sm-3"><button class="btn btn-danger" onclick="document.getElementById('delete-group{{$group->id}}').submit();">Delete Group</button></div>
    <form id="delete-group{{$group->id}}" action="{{ $controllerUrl }}/{{$group->id}}" method="POST">
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
    <br><br>
  </div>
  <div class="row">
    <h4>Students: </h4>
    <table id="example2" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>e-mail</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($group->users as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email }} </td>
          <td>
            <a class="btn btn-primary" href="profiles/{{$user->id}}">View</a>
            @if((Auth::user())->can('create articles'))
            <button class="btn btn-danger" onclick="document.getElementById('delete{{$user->id}}').submit();">Remove</button>
            <form id="delete{{$user->id}}" action="{{ $controllerUrl }}/{{$user->id}}" method="POST">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
            </form>
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>e-mail</th>
          <th>Options</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection