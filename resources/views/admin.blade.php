@extends('master')
    
    @section('content')
    <style type="text/css">
    	.blog-post{
    		text-align: center;
    	}
    </style>
          <div class="blog-post">
            <h3 ><b>Hello, {{ Auth::user()->name }} !</b></h3>
            <h4><b>You are logged in {{ Auth::user()->name }} as {{ Auth::user()->role }}</b></h4>
            
          </div>

          
@stop
