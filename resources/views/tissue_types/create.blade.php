@extends('layouts.create-layout')

@section('card-header')
    @if(isset($record))
        Update Tissue Type
    @else
        Create Tissue Type
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
        <div class="form-group">
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
    {{ Form::close() }}
</div>
@endsection
