@extends('layout.base')

@section('content')

	<div class="container">
		
		<h3 class="display-3">
			{{$note->title}}
		</h3>
		<p>
			{{$note->body}}
		</p>
	</div>

@endsection