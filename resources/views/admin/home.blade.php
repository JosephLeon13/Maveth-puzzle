@extends('admin.layouts')

@section('content')

@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Admin's Dashboard</div>

                <div class="panel-body">
                    Greetings.. 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
