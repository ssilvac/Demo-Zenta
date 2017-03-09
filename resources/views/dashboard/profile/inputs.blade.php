<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', isset($user->name) ? $user->name : '' , array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', isset($user->email) ? $user->email : '' , array('class' => 'form-control')) }}
</div>
