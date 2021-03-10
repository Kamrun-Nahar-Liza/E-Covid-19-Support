@extends('master')

@section('content')

   

	<h2><b>Title:</b> {{ $plasmapost->title }}</h2>

	<p>
		<b>Symptoms:</b> {{ $plasmapost->blood_group }}
	</p>

	<p>
		<b>Recovery Instructions:</b> {{ $plasmapost->content }}
    </p>
	

    <p>
        Posted By: {{ $plasmapost->user->name }}
    </p>

    <p>
       Country: {{ $plasmapost->country->name }}
    </p>

	<p>
		Posted at:  
        @empty(! $plasmapost->created_at) 
        {{ $plasmapost->created_at->diffForHumans() }}
        @else
        {{ "No posted date found!" }}
        @endempty   
    </p>    
        
	 

    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

    <div class="btn-group mr-2" role="group" aria-label="First group">

        <a href="{{ route('plasmaposts.edit' , $plasmapost->id) }}" class="btn btn-success"><i class="fa fa-pencil-square-o"> Edit </i></a>

    </div>

    <div class="btn-group mr-2" role="group" aria-label="Second group">

        <form action="{{ route('plasmaposts.destroy' , $plasmapost->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete?')">
                
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn btn-danger ">
                    <i class="fa fa-trash">  Delete </i>
                </button>

        </form>
    </div>
    </div>

	<hr>
	<div>
		<a href="{{ route('plasmaposts.index')}}" class="btn btn-primary lg">
        Back to Post
      </a>
	</div>


@endsection