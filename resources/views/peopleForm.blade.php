@extends('_master')

@section('content')
	<h1>This is working!</h1>
	<p>Indicate the maximum integer you want to get a random number for.</p>
	<form method="post" action="/people">
		Number of People: <br/>
		<input type="text" name="number"/>
		Birthdays? <input type="radio" name="birthday" value="on"/>
		Profiles? <input type="radio" name="profile" value="on"/>
		<input type="submit"/>
		<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
	</form>
@stop