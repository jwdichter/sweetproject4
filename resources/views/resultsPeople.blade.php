@extends('_master')

@section('content')
	<h1>These are your People!</h1>
	<ul>
		@foreach($names as $line)
			<li>{{$line}}</li>
		@endforeach
	</ul>
        
        @if($birthday)
        <h1>These are their Birthdays!</h1>
        <ul>
                @for($i = 0; $i < count($birthdays); $i++) {
                        <li>{{$names[$i].' - '.$birthdays[$i]}}</li>
	        @endfor
            
        </ul>
        @endif
        
        @if($profile)
        <h1>And these are their Profiles!</h1>
        <ul>
                @for($i = 0; $i < count($profiles); $i++) {
                        <li>{{$names[$i].' - '.$profiles[$i]}}</li>
	        @endfor
            
        </ul>
        @endif
@stop