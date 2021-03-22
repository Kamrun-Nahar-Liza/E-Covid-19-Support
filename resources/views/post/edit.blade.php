@extends('master')

@section('content')
	<h2><b>Edit Post</b></h2>

	<form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">

	{{ csrf_field() }}
  <input name="_method" type="hidden" value="PUT">


    @if ($errors->any())
    <div class="alert alert-danger">
            @if($errors->count() == 1)
              {{ $errors->first() }}
            @else
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            
        </ul>
        @endif
    </div>
@endif

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message')}}
    </div>
    @endif


  <div class="form-group">
    <label for="countries">Country</label>
      <select name="country_id" class="form-control">
        
            @foreach($countries->all() as $country)
            <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
            
      </select>  
    </div>


    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title"  value="{{ $post->title }}" placeholder="Enter post title ">
    </div>

    <div class="form-group">
        <label for="symptoms">Syntomps of Covid-19</label>
        <input type="text" class="form-control" name="symptoms"  value="{{ $post->symptoms }}" placeholder="Enter symptoms of covid-19 ">
    </div>

   <div class="form-group">
    <label for="content">Recovery Instructions</label>
    <textarea class="form-control" name="content" placeholder="Enter post content ">{{ $post->content }}</textarea>
   </div>
  
  

  <div class="form-group">
    <label for="status">Status</label>
      <select name="status" class="form-control">
        <option value="1" @if($post->status ==1) selected @endif>Active</option>
        <option value="0" @if($post->status ==0) selected @endif>Inactive</option>
      </select>  

  </div>
  
  
  <button type="submit" class="btn btn-success">Update</button>
	</form>

  <hr>
  <p>
      <a href="{{ route('posts.index')}}" class="btn btn-primary">
        Back to Post
      </a>
    </p>
@endsection