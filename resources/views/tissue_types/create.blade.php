@extends('layouts.create')

@section('card-header')
    Tissue Types' list
@endsection
@section('body')
    <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
        {{Form::label('name', 'Name')}}:
        {{ Form::text('name', null, array('class' => $errors->has('name') ? 'form-control  is-invalid' : 'form-control')) }}
    </div>
    <br>
    <div class="form-group {{ $errors->has('tissue_type') ? 'has-danger' : '' }}">
        {{Form::label('tissue_type_id', 'Tissue Type')}}:
        {{Form::select('tissue_type_id',$tissueTypes, null, array('class' => $errors->has('tissue_type_id') ? 'form-control is-invalid' : 'form-control'))}}
        {!! $errors->first('tissue_type_id', '<p class="invalid-feedback">:message</p>') !!}
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
    <a class="btn btn-default" href="{{ URL::to($controllerUrl) }}">Cancel</a>
@endsection
