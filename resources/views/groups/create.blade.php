@extends('layouts.create-layout')

@section('card-header')
    @if(isset($record))
        Update Group
    @else
        Create Group
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
        {{ Form::textarea('description', null, array('class' => $errors->has('description') ? 'form-control my-editor is-invalid' : 'form-control my-editor')) }}
        {!! $errors->first('description', '<p class="invalid-feedback">:message</p>') !!}
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

