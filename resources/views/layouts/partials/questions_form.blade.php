@if( isset($record) )
	{{ Form::model($record, ['method' => 'PATCH', 'url' => ["{$controllerUrl}/{$record->id}"],'id' => 'create', 'enctype' => "multipart/form-data"]) }}
@else
	{{ Form::open(['url' => $controllerUrl,'id' => 'create', 'enctype' => "multipart/form-data" ]) }}
@endif
@csrf
<br>
<div class="form-group {{ $errors->has('body') ? 'has-danger' : '' }}">
  {{ Form::label('body', 'Body') }}:
  {{ Form::textarea('body', null, array('class' => $errors->has('body') ? 'form-control my-editor  is-invalid' : 'form-control my-editor')) }}
  {!! $errors->first('body', '<p class="invalid-feedback">:message</p>') !!}
</div>
<br>
<div class="form-group {{ $errors->has('score') ? 'has-danger' : '' }}">
  {{Form::label('score', 'Score')}}:
  {{ Form::number('score', null, array('placeholder' => 'Default score is 1' ,'class' => $errors->has('score') ? 'form-control  is-invalid' : 'form-control')) }}
  {!! $errors->first('score', '<p class="invalid-feedback">:message</p>') !!}
</div>
<br>
<div class="form-group {{ $errors->has('image') ? 'has-danger' : '' }}">
  {{Form::label('image', 'Add an Image')}}:
  {{ Form::file('image', null, array('class' => $errors->has('image') ? 'form-control  is-invalid' : 'form-control')) }}
  {!! $errors->first('image', '<p class="invalid-feedback">:message</p>') !!}
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