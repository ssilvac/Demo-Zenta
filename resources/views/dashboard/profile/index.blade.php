@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                <div class="panel-body">

                    <div class="form-group">
                        <label for="">ID : </label>
                        <span>{{ Auth::user()->id }}</span>
                    </div>

                    <div class="form-group">
                        <label for="">Name : </label>
                        <span>{{ Auth::user()->name }}</span>
                    </div>

                    <div class="form-group">
                        <label for="">Email : </label>
                        <span>{{ Auth::user()->email }}</span>
                    </div>

                    <div class="form-group">
                        <label for="">Created : </label>
                        <span>{{ Auth::user()->created_at }}</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
