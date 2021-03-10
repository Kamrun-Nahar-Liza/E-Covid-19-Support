@extends('master')

@section('content')
	<h2><b>Add Plasma Post</b></h2>

	<form action="{{ route('plasmaposts.store') }}" method="post" enctype="multipart/form-data">

	{{ csrf_field() }}


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
    <label for="country_id">Country</label>
      <select name="country_id" class="form-control">
        <option value="">--Choose Country--</option>
            @foreach($countries as $country)
            <option value="{{ $country->id}}">{{ $country->name }}</option>
            @endforeach
            
        
      </select>  

  </div>
  
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title"  value="{{ old('title')}}" placeholder="Enter post title ">
    </div>

   <div class="form-group">
    <label for="content">Contact & Address</label>
    <textarea class="form-control" name="content"   placeholder="Enter post content ">{{ old('content')}}</textarea>  
    </div>
    

    <div class="form-group">
        <label for="blood_group">Blood Group</label>
          <select name="blood_group" class="form-control">
                <option value="">--Choose Blood Group--</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
          </select>     
      </div>
  
  
    <button type="submit" class="btn btn-success">Save</button>
  
	</form>

  <hr>
  <p>
      <a href="{{ route('plasmaposts.index') }}" class="btn btn-primary">
        Back to Post
      </a>
    </p>

@endsection