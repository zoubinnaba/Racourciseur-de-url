@extends('layouts/base')

@section('content')
	<h1>We can find your shortened url below :</h1>

	<a href="{{env('APP_URL')}}/{{ $shortened }}">
		{{env('APP_URL')}}/{{ $shortened }}
	</a>
@stop