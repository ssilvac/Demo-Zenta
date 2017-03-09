@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">

                    <div class="form-group">
                        <label for="">Nº Post</label>
                        <span id='num_post'>{{ $num_posts }}</span>
                    </div>

                    <div class="form-group">
                        <label for="">Nº Usuarios registrados</label>
                        <span id='num_post'>{{ $num_users }}</span>
                    </div>

                    <div class="form-group">
                        <label for="">Nº Categories</label>
                        <span id='num_post'>{{ $num_categories }}</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
