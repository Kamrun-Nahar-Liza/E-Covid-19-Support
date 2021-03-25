@extends('master')

@section('content')

   <h2><b><u>Recovery Instruction Post</u><b></h2>

	<h3><b>Title:</b> {{ $post->title }}</h3>

	<h4>
		<b>Symptoms:</b> {{ $post->symptoms }}
  </h4>

	<h4>
		<b>Recovery Instructions:</b> {!! htmlspecialchars_decode($post->content) !!}
  </h4>
	
    <h4>
		<b>Status:</b> {{ $post->status == 1 ?'Active' : 'Inactive'}}
    </h4>

    <h4>
        <b>Posted By:</b> {{ $post->user->name }}
    </h4>

    <h4>
       <b>Country:</b> {{ $post->country->name }}
    </h4>

	<p>
		<b>Posted at:</b> {{ $post->created_at->diffforHumans() }}  
    </p>    

    
    <ul class="nav nav-pills">
    <li role="presentation">
      <a href='{{ url("/like/{$post->id}") }}'>
          <span class="fa fa-thumbs-up"> Like({{ $likeCtr }})</span>
      </a>
      </li>
  <li role="presentation">
      <a href='{{ url("/dislike/{$post->id}")}}'>
          <span class="fa fa-thumbs-down"> Dislike({{ $dislikeCtr }})</span>
      </a>
      </li>
    </ul>

    {{-- Comment Start --}}

    <p>
        <h4><b>Comment :</b></h4>	<form  method="POST" action='{{ url("/comment/{$post->id}") }}' >
                {{ csrf_field() }}
    
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                    {{ session('message')}}
                    </div>
                    @endif
    
                    <div class="form-group">
                    <textarea id="Comment" rows="5" class="form-control" name="comment" required="autofocus"></textarea>
    
                    <button type="submit" class="btn btn-success">
                            <i class="fa fa-commenting">  Comment</i>
                    </button>
         
                    </div>
                </form>
                         <h3><b>  Comments</b></h3>
                         @if(count($comments) > 0)
                                @foreach($comments as $comment)
                                <p><h4><b><u> {{ $comment->name}}  : </u></b></h4> <h5><b>'{{ $comment->comment}}'</b></h5>Commented at: {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }} </p>
                                
                                   @if($comment->user_id ==  Auth::user()->id)
                                <p><div>
        <form action="{{ route('comment.delete' , $comment->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete?')">
          
          {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn-xs btn-danger ">
                  <i class="fa fa-trash"> Delete Comment</i>
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
        
	 
    @if( Auth::user()->role == "admin" || $post->user_id == Auth::user()->id)
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

    <div class="btn-group mr-2" role="group" aria-label="First group">

        <a href="{{ route('posts.edit' , $post->id) }}" class="btn btn-success"><i class="fa fa-pencil-square-o"> Edit </i></a>

    </div>

    <div class="btn-group mr-2" role="group" aria-label="Second group">

        <form action="{{ route('posts.destroy' , $post->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete?')">
                
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
		<a href="{{ route('posts.index')}}" class="btn btn-primary lg">
        Back to Post
      </a>
	</div>


@endsection