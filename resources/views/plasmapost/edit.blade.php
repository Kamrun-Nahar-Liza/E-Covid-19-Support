@extends('master')

@section('content')
	<h2><b>Edit Plasma Post</b></h2>

	<form action="{{ route('plasmaposts.update', $plasmapost->id) }}" method="post" enctype="multipart/form-data">

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
            <option value="{{ $country->id}}" @if( $country->id = $plasmapost->country_name) Selected  @endif> {{ $country->name }}</option>
            @endforeach
        
      </select>  
    </div>


    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title"  value="{{ $plasmapost->title }}" placeholder="Enter post title ">
    </div>

   <div class="form-group">
    <label for="content">Contact & Address</label>
    <textarea class="form-control" name="content" placeholder="Enter post content ">{{ $plasmapost->content }}</textarea>
   </div>
  
  

   <div class="form-group">
    <label for="blood_group">Blood Group</label>
      <select name="blood_group" class="form-control">
            <option value="">--Choose Blood Group--</option>
            <option value="A+" {{ $plasmapost->blood_group == 'A+' ? 'selected' : '' }}>A+</option>
            <option value="A-" {{ $plasmapost->blood_group == 'A-' ? 'selected' : '' }}>A-</option>
            <option value="B+" {{ $plasmapost->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
            <option value="B-" {{ $plasmapost->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
            <option value="AB+"{{ $plasmapost->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
            <option value="AB-"{{ $plasmapost->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
            <option value="O+" {{ $plasmapost->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
            <option value="O-" {{ $plasmapost->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
      </select>     
  </div>
  
  
  <button type="submit" class="btn btn-primary">Update</button>
	</form>

  <hr>
  <p>
      <a href="{{ route('plasmaposts.index')}}" class="btn btn-success">
        Back to Plasma Post
      </a>
    </p>
@endsection