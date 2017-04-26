@extends('layouts.app')

@section('title', 'Rebirth')

<body class="p_2">

@section('content')

    <div class="container">

    <puzzle></puzzle>
     
    <ul class="left_c">
        <li><a href="{{ url('/')}}"><img id='al' class="" title="I am Death" src="/img/om.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/tav.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/shin.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/resh.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/qof.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/tsadeh.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/peh.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/ayin.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/samech.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/nun.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" title="I am spirit of Death" src="/img/mem.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/lamed.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/kaf.png"></a></li>

	</ul>

	<img title="The Keys are in Death" class="img-responsive center-block black_sun" src="/img/black_sun.png">
	
	<ul class="right_c">
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/yod.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/tet.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/chet.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/zayin.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" title="I am sin" src="/img/vav.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/he.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" title="I am creation" src="/img/dalet.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/gimel.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/bet.png"></a></li>
        <li><a href="{{ url('/')}}"><img id='al' class="" src="/img/aleph.png"></a></li>
	</ul>
    
	

    

    </div>
@endsection
</body>