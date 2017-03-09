<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', isset($post->title) ? $post->title : '' , array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', isset($post->description) ? $post->description : '' , array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('category_id', 'Category') }}
    {{ Form::select('category_id', $categories, isset($post->category_id) ? $post->category_id : '' , array('class' => 'form-control')) }}
</div>
