@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit profile</div>
                <div class="panel-body">


                    {!! Form::model($user, ['method' => 'PUT','route' => ['profile_update', $user->id]]) !!}

                        @include('dashboard.profile.inputs')

                        {{ Form::submit('Edit a Profile!', array('class' => 'btn btn-primary')) }}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
