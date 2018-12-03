@if( isset($record) )
	{{ Form::model($record, ['method' => 'PATCH', 'url' => ["{$controllerUrl}/{$record->id}"],'id' => 'create', 'enctype' => "multipart/form-data"]) }}
@else
	{{ Form::open(['url' => $controllerUrl,'id' => 'create', 'enctype' => "multipart/form-data" ]) }}
@endif
@csrf
<br>
<div class="form-group {{ $errors->has('title') ? 'has-danger' : '' }}">
  {{ Form::label('title', 'Body') }}:
  {{ Form::text('title', null, array('class' => $errors->has('title') ? 'form-control my-editor  is-invalid' : 'form-control my-editor')) }}
  {!! $errors->first('title', '<p class="invalid-feedback">:message</p>') !!}
</div>
<br>
<div class="form-group {{ $errors->has('body') ? 'has-danger' : '' }}">
  {{ Form::label('body', 'Body') }}:
  {{ Form::textarea('body', null, array('class' => $errors->has('body') ? 'form-control my-editor  is-invalid' : 'form-control my-editor')) }}
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