
  {{ Form::open(['url' => '/profile','id' => 'create', 'enctype' => "multipart/form-data", "class" => "form-horizontal" ]) }}
  @csrf
  <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
      {{Form::label('name', 'Name:', array('class'=> 'col-sm-2 control-label'))}}
      <div class="col-sm-10">
      {{ Form::text('name', $user->name, array('class' => $errors->has('name') ? 'form-control  is-invalid' : 'form-control')) }}
      {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
      </div>
  </div>
  
  <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
      {{Form::label('email', 'E-mail:', array('class'=> 'col-sm-2 control-label'))}}
      <div class="col-sm-10">
      {{ Form::email('email', $user->email, array('class' => $errors->has('email') ? 'form-control  is-invalid' : 'form-control')) }}
      {!! $errors->first('email', '<p class="invalid-feedback">:message</p>') !!}
      </div>
  </div>
  
  <div class="form-group">
    {{Form::label('avatar', 'Avatar:', array('class'=> 'col-sm-2 control-label'))}}
    {{Form::file('avatar',null, array('class' => $errors->has('avatar') ? 'form-control  is-invalid' : 'form-control'))}}
    {!! $errors->first('avatar', '<p class="invalid-feedback">:message</p>') !!}
  </div>

  <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
      {{Form::label('about_me', 'About me:', array('class'=> 'col-sm-2 control-label'))}}
      <div class="col-sm-10">
      {{ Form::text('about_me', ((isset($user->profile->about_me)) ? $user->profile->about_me : null), array('class' => $errors->has('about_me') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Tell us about you')) }}
      {!! $errors->first('about_me', '<p class="invalid-feedback">:message</p>') !!}
      </div>
  </div>

  <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
      {{Form::label('location', 'Location:', array('class'=> 'col-sm-2 control-label'))}}
      <div class="col-sm-10">
      {{ Form::text('location', ((isset($user->profile->location)) ? $user->profile->location : null), array('class' => $errors->has('location') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Leave a note')) }}
      {!! $errors->first('location', '<p class="invalid-feedback">:message</p>') !!}
      </div>
  </div>

  <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
      {{Form::label('notes', 'Notes:', array('class'=> 'col-sm-2 control-label'))}}
      <div class="col-sm-10">
      {{ Form::text('notes', ((isset($user->profile->notes)) ? $user->profile->notes : null), array('class' => $errors->has('notes') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Leave a note')) }}
      {!! $errors->first('notes', '<p class="invalid-feedback">:message</p>') !!}
      </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-danger">Submit</button>
    </div>
  </div>
  {{ Form::close() }}