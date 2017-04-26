@extends('layouts.app')

@section('title', 'Maveth')

@section('content')

@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
    
    <div class="container">

   			<example></example>
        	<img title="I am creation... I am Death" class="img-responsive center-block mvvt" src="/img/mavet.jpg"  width="35%" height="35%">
        
    </div>

@endsection