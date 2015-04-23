@extends('_master')

@section('content')
	<h1>These are your paragraphs!</h1>
	<ul>
		@foreach($paragraphs as $line)
			<li>{{$line}}</li>
		@endforeach
	</ul>
@stop