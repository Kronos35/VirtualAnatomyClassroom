@if( isset($record) )
    {{ Form::model($record, ['method' => 'PATCH', 'url' => ["/tests/{$record->id}"],'id' => 'create']) }}
@else
    {{ Form::open(['url' => '/tests','id' => 'create']) }}
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
<div class="form-group {{ $errors->has('instructions') ? 'has-danger' : '' }}">
    {{Form::label('instructions', 'Instructions')}}:
    {{ Form::textarea('instructions', null, array('class' => $errors->has('instructions') ? 'form-control my-editor  is-invalid' : 'form-control my-editor')) }}
    {!! $errors->first('instructions', '<p class="invalid-feedback">:message</p>') !!}
</div>
<br>
<div class="form-group {{ $errors->has('due_at') ? 'has-danger' : '' }}">
    {{ Form::label('due_at', 'due_at:') }}
    {{ Form::date('due_at', null, array('class' => 'datepicker','id' => 'datepicker')) }} 
    {!! $errors->first('due_at', '<p class="invalid-feedback">:message</p>') !!}
</div>
<br>
@if(isset($group))
    {{Form::hidden('group_id', $group->id)}}
@endif
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