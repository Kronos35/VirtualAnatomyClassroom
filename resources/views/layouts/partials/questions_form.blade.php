@if( isset($record) )
    {{ Form::model($record, ['method' => 'PATCH', 'url' => ["/questions/{$record->id}"],'id' => 'create']) }}
@else
    {{ Form::open(['url' => '/questions','id' => 'create']) }}
@endif
@csrf
<br>
<div class="form-group {{ $errors->has('body') ? 'has-danger' : '' }}">
    {{Form::label('body', 'body')}}:
    {{ Form::textarea('body', null, array('class' => $errors->has('body') ? 'form-control  is-invalid' : 'form-control')) }}
    {!! $errors->first('body', '<p class="invalid-feedback">:message</p>') !!}
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