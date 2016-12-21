@extends('main')

@section('content')
	<div class="text-left">
		<h3>Story Title</h3>
		<h4>Main Character:</h4>
		<ul class="list-unstyled">
			<li>{{$mainCharacter->title}} {{$mainCharacter->firstName}} {{$mainCharacter->lastName}} {{$mainCharacter->suffix}}</li>
		</ul>
	</div>
@endsection