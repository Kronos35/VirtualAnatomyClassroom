@extends('layouts.crate')

@section('card-header')
Tissue's list
@endsection
@section('body')
    <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
        {{Form::label('name', 'Name')}}:
        {{ Form::text('name', null, array('class' => $errors->has('name') ? 'form-control  is-invalid' : 'form-control')) }}
    </div>
    <br>
    <div class="form-group {{ $errors->has('tissue_type_id') ? 'has-danger' : '' }}">
        {{Form::label('tissue_type_id', 'Tissue Type')}}:
        {{Form::select('tissue_type_id',$tissueTypes,null, array('class' => $errors->has('name') ? 'form-control  is-invalid' : 'form-control'))}}
        {!! $errors->first('tissue_type_id', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <div class="form-group {{ $errors->has('content') ? 'has-danger' : '' }}">
        {{Form::label('content', 'Content')}}:
        {{ Form::textarea('content', null, array('class' => $errors->has('name') ? 'form-control  is-invalid' : 'form-control')) }}
        {!! $errors->first('content', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
        {{Form::label('description', 'Description')}}:
        {{ Form::textarea('description', null, array('class' => $errors->has('name') ? 'form-control  is-invalid' : 'form-control')) }}
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
@endsection
