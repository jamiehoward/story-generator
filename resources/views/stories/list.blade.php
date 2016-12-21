@extends('main')

@section('yield')
	
	@forelse ($stories as $story)

	@empty
		<div style="color:lightgray">
			<h1>No stories yet.</h1>
			<h4>Go ahead and generate one!</h4>
		</div>
	@endforelse

@endsection