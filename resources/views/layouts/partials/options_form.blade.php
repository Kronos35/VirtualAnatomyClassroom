{{ Form::open(['url' => "/options/",'id' => 'create']) }}
<div class="form-group {{ $errors->has('due_at') ? 'has-danger' : '' }}">
	{{Form::label('body', 'Body')}}
	{{Form::textarea('body',null,array('class' => $errors->has('name') ? 'form-control  is-invalid' : 'form-control'))}}
	{!! $errors->first('body', '<p class="invalid-feedback">:message</p>') !!}
</div>
<br>
@if(isset($question))
    {{Form::hidden('question_id', $question->id)}}
@endif
<button type="submit" class="btn btn-primary">
    Update
</button>
{{ Form::close() }}