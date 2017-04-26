<body class="p_2">
@extends('layouts.app')

@section('title', 'Other Voices')

@section('content')

<div class="contianer">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default chat-panel">
				<div class="panel-heading heading_chat">Chat Room</div>

				<div class="panel-body">
					<chat-messages :messages='messages'></chat-messages>
				</div>
				<div class="panel-footer">
					<chat-form
					 v-on:messagesent="addMessage"
					 :user="{{ Auth::user() }}"
					></chat-form>
				</div>
			</div>			
		</div>		
	</div>	
</div>

@endsection
</body>