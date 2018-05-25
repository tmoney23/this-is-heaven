@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    You are logged in
=======
                    You are logging in
>>>>>>> 2d0c55db9010ae249126dd72739d152184113f4e
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
