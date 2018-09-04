{{ Form::open(['url' => '/groups/'.$group->id.'/add_test']) }}
    @csrf
    <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
        {{Form::label('test_id', 'Test')}}:
        {{Form::select('test_id', Auth::user()->tests->pluck('name','id'),null, array('class' => $errors->has('test_id') ? 'form-control  is-invalid' : 'form-control'))}}
        {!! $errors->first('test_id', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <br>
    <button type="submit" class="btn btn-primary">
        Add
    </button>
{{ Form::close() }}