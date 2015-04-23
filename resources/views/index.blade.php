@extends('_master')

@section('title')
	This is a working title!
@stop

@section('head')
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
@stop

@section('content')
	<h1>This is an awesome site!</h1>
	{{date('h:i:s')}}
	<p></p>
	<a href="/text">Fill out my text form</a>
        <p></p>
        <a href="/people">Fill out my people form</a>
@stop