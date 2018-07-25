@extends('layouts.create-layout')

@section('card-header')
    @if(isset($record))
        Update Group
    @else
        Create Group
    @endif
@endsection

@section('body')
<div class="container">
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
    <div class="form-group {{ $errors->has('content') ? 'has-danger' : '' }}">
        {{Form::label('content', 'Content')}}:
        {{ Form::textarea('content', null, array('class' => $errors->has('content') ? 'form-control  is-invalid' : 'form-control')) }}
        {!! $errors->first('content', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
        {{Form::label('description', 'Description')}}:
        {{ Form::textarea('description', null, array('class' => $errors->has('description') ? 'form-control  is-invalid' : 'form-control')) }}
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
</div>
@endsection

