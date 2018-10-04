@if(isset($group))
{{ Form::open(['url' => ["/groups/{$group->id}/add_test"],'id' => 'create']) }}
@elseif(isset($question))
{{ Form::open(['url' => ["/questions/{$question->id}/add_test"],'id' => 'create']) }}
@endif
<div class="form-group {{ $errors->has('due_at') ? 'has-danger' : '' }}">
	{{Form::label('tests', 'Tests')}}
	{{Form::select('test_id', $user_tests, null, array('class' => $errors->has('tissue_type_id') ? 'form-control  is-invalid' : 'form-control'))}}
</div>
<br>
<button type="submit" class="btn btn-primary">
    Update
</button>
{{ Form::close() }}