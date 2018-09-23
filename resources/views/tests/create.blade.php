@extends('layouts.create-layout')

@section('card-header')
  @if(isset($record))
      Update Test Type
  @else
      Create Test Type
  @endif
@endsection

@section('instance_body')
  @if( isset($record) )
    {{ Form::model($record, ['method' => 'PATCH', 'url' => ["{$controllerUrl}/{$record->id}"],'id' => 'create', 'enctype' => "multipart/form-data"]) }}
  @else
    {{ Form::open(['url' => $controllerUrl,'id' => 'create', 'enctype' => "multipart/form-data" ]) }}
  @endif
  @csrf
    <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
      {{Form::label('name', 'Name')}}:
      {{ Form::text('name', null, array('class' => $errors->has('name') ? 'form-control  is-invalid' : 'form-control')) }}
      {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
      {{Form::label('description', 'Description')}}:
      {{ Form::textarea('description', null, array('class' => $errors->has('description') ? 'form-control  is-invalid' : 'form-control')) }}
      {!! $errors->first('description', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
      {{Form::label('instructions', 'Instructions')}}:
      {{ Form::textarea('instructions', null, array('class' => $errors->has('instructions') ? 'form-control  is-invalid' : 'form-control')) }}
      {!! $errors->first('instructions', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
      {{Form::label('due_at', 'Due at')}}:
      {{ Form::date('due_at', null, array('class' => $errors->has('due_at') ? 'form-control  is-invalid' : 'form-control')) }}
      {!! $errors->first('due_at', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
      {{Form::label('image', 'Add an image')}}:
      {{Form::file('image', null, array('class' => $errors->has('image') ? 'form-control  is-invalid' : 'form-control')) }}
      {!! $errors->first('image', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    @if( isset($record) )
      <button type="submit" class="btn btn-primary">
        Update
      </button>
    @else
      <button type="submit" class="btn btn-primary">
        Create
      </button>
    @endif
    <a class="btn btn-default" href="{{ URL::to($controllerUrl) }}">Cancel</a>
  {{ Form::close() }}
@endsection
