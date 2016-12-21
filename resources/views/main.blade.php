<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>
		body { background-size:cover; background:lightgray; }
		.container { background:white; padding:15px; height:50%; margin-top:10%; border-radius:15px;}
	</style>
</head>
<body @if($backgroundImage) style="background-image:url('{{$backgroundImage}}');" @endif>
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<h1 style="color:gray;"><i class="fa fa-book"></i> Indaba Story Generator</h1>
			</div>
			<div class="col-lg-3 text-right">
				<a href="/makeStory" id="new-story-btn" class="btn btn-primary btn-lg btn-success">Generate a new story</a>
			</div>
		</div>
		<div class="row col-lg-12">
			<hr />
		</div>
		<div class="row col-lg-12 text-center">
			@yield('content')
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>