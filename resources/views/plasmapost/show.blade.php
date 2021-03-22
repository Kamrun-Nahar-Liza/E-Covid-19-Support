@extends('master')

@section('content')

   <h2><b><u>Plasma Post</u><b></h2>

	<h3><b>Title:</b> {{ $plasmapost->title }}</h3>

	<p>
		<b>Blood Group:</b> {{ $plasmapost->blood_group }}
	</p>

	<p>
		<b>Contact & Address:</b> {{ $plasmapost->content }}
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
    
    
    {{-- Comment Start --}}

    <p>
        <h4><b>Comment :</b></h4>	
        
        <form  method="POST" action='{{ url("/plasmacomment/{$plasmapost->id}") }}' >
            {{ csrf_field() }}
    
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                        {{ session('message')}}
                        </div>
                        @endif
    
        <div class="form-group">
            <textarea id="Plasma_comment" rows="5" class="form-control" name="plasma_comment" required="autofocus"></textarea>
    
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-commenting"> Comment </i>
                </button>
         
        </div>
        </form>

        <h3><b>  Comments </b></h3>

            @if(count($comments) > 0)
                @foreach($comments as $comment)
                <p><h4><b><u> {{ $comment->name}} : </u></b></h4> <h5><b> '{{ $comment->plasma_comment}}' </b></h5> Commented at: {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }} </p>
                
                
                @if($comment->user_id ==  Auth::user()->id)
                <p><div>
               <form action="{{ route('plasmacomment.delete' , $comment->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete?')">
          
               {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn-xs btn-danger ">
                  Delete Comment
                </button>
    
             </form>
           </div></p>
           @endif
                                
           @endforeach
           @else
                <p>No Comments Avilable!</p>
            @endif
                    </hr>
    
                    </hr>
        </p>
        

    {{-- Comment End --}}
        
	 
    @if( Auth::user()->role == "admin" || $plasmapost->user_id == Auth::user()->id)
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
    @endif

	<hr>
	<div>
		<a href="{{ route('plasmaposts.index')}}" class="btn btn-primary lg">
        Back to Post
      </a>
	</div>


@endsection