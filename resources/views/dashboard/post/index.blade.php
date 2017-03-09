@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List posts</div>
                <div class="panel-body">



                    @foreach ($posts as $post)

                        <div class="post">
                            <h3>{{ $post->title }}</h3>
                            <p>{{ $post->description }}</p>
                            <a class='btn btn-success btn-xs' href="{!! route('posts_edit', ['i'=>$post->id]) !!}">Edit</a>

                            {!! Form::model($post, ['method' => 'DELETE','route' => ['posts_destroy', $post->id]]) !!}
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) }}
                            {!! Form::close() !!}

                            <small class='pull-right'>Posted by <strong>{{ $post->User->name }}</strong></small>
                            <br>

                            <small class='pull-right to_moment' data-date='{{ $post->created_at }}'></small>
                            <hr>
                        </div>


                    @endforeach

                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
