@extends('_master')

@section('content')
	<h1>Text Form!</h1>
	<form method="post" action="/text">
		Number of Paragraphs: <br/>
		<input type="text" name="number"/>
		<input type="submit"/>
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
	</form>
@stop