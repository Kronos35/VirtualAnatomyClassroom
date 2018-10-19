@extends('layouts.create-layout')

@section('card-header')
  @if(isset($record))
      Update Test
  @else
      Create new Test
  @endif
@endsection

@section('instance_body')
  @if( isset($record) )
    {{ Form::model($record, ['method' => 'PATCH', 'url' => ["{$controllerUrl}/{$record->id}"],'id' => 'create', 'enctype' => "multipart/form-data"]) }}
  @else
    {{ Form::open(['url' => $controllerUrl,'id' => 'create', 'enctype' => "multipart/form-data" ]) }}
  @endif
  @csrf
    <div class="form-group {{ $errors->has('title') ? 'has-danger' : '' }}">
      {{Form::label('title', 'Title')}}:
      {{ Form::text('title', null, array('class' => $errors->has('title') ? 'form-control my-editor  is-invalid' : 'form-control my-editor')) }}
      {!! $errors->first('title', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
      {{Form::label('description', 'Description')}}:
      {{ Form::textarea('description', null, array('class' => $errors->has('description') ? 'form-control my-editor  is-invalid' : 'form-control my-editor')) }}
      {!! $errors->first('description', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
      {{Form::label('instructions', 'Instructions')}}:
      {{ Form::textarea('instructions', null, array('class' => $errors->has('instructions') ? 'form-control my-editor  is-invalid' : 'form-control my-editor')) }}
      {!! $errors->first('instructions', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
      {{Form::label('due_at', 'Due at')}}:
      {{ Form::date('due_at', null, array('class' => $errors->has('due_at') ? 'form-control my-editor  is-invalid' : 'form-control my-editor')) }}
      {!! $errors->first('due_at', '<p class="invalid-feedback">:message</p>') !!}
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
