@extends('_master')

@section('title')
    Lorem Ipsum Page
@stop

@section('head')

@stop

@section('content')

<a href='/'> Back to Home page</a>

    <h1>Welcome to Lorem Ipsum Generator</h1
	
		
		How many paragraphs do you want?
	
	<form method='POST'>
	
		<input name="_token" type="hidden" value="1KMXZmIJL14jqewAJ2Z5eyCjUpaTXu2oWYooDDPn">	
		<label for="paragraphs">Paragraphs</label>				
		<input maxlength="2" name="paragraphs" type="text" value="5" id="paragraphs"> (Max: 99)
		
		<br><br>
			
		<input type="submit" value="Generate!">    
    </form>

@stop

@section('footer')
  
@stop

