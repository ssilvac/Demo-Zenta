@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit post</div>
                <div class="panel-body">

                    {!! Form::model($post, ['method' => 'PUT','route' => ['posts_update', $post->id]]) !!}

                        @include('dashboard.post.inputs')

                        {{ Form::submit('Edit a POST!', array('class' => 'btn btn-primary')) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
