@extends('layouts.create-layout')

@section('card-header')
    @if(isset($record))
        Update Test
    @else
        Create New Test
    @endif
@endsection

@section('instance_body')
    @if( isset($record) )
        {{ Form::model($record, ['method' => 'PATCH', 'url' => ["{$controllerUrl}/{$record->id}"],'id' => 'create']) }}
    @else
        {{ Form::open(['url' => $controllerUrl,'id' => 'create']) }}
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
    <div class="form-group {{ $errors->has('instructions') ? 'has-danger' : '' }}">
        {{Form::label('instructions', 'Instructions')}}:
        {{ Form::textarea('instructions', null, array('class' => $errors->has('instructions') ? 'form-control  is-invalid' : 'form-control')) }}
        {!! $errors->first('instructions', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
        {{Form::label('group_id', 'Group')}}:
        {{Form::select('group_id',$groups,null, array('class' => $errors->has('group_id') ? 'form-control  is-invalid' : 'form-control'))}}
        {!! $errors->first('group_id', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <div class="form-group {{ $errors->has('due_at') ? 'has-danger' : '' }}">
        {{ Form::label('due_at', 'due_at:') }}
        {{ Form::date('due_at', null, array('class' => 'datepicker','id' => 'datepicker')) }} 
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
    {{ Form::close() }}
@endsection

