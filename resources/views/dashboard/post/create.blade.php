@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create new Post</div>
                <div class="panel-body">

                    <form class="form" action="{{ route('posts_store') }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        @include('dashboard.post.inputs')

                        {{ Form::submit('Create a POST!', array('class' => 'btn btn-primary')) }}

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
