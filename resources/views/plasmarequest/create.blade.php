@extends('master')

@section('content')
	<h2><b>Add Plasma Request</b></h2>

	<form action="{{ route('plasmarequests.store') }}" method="post" enctype="multipart/form-data">

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
        <label for="first_name">Donor First Name</label>
        <input type="text" class="form-control" name="first_name"  value="{{ $data->first_name }}" placeholder="Enter first name ">
    </div>

    <div class="form-group">
        <label for="last_name">Donor Last Name</label>
        <input type="text" class="form-control" name="last_name"  value="{{ $data->last_name }}" placeholder="Enter last name ">
    </div>

    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" name="country"  value="{{ $data->country }}" placeholder="Enter country ">
    </div>
  
    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" class="form-control" name="location"  value="{{ $data->area }}" placeholder="Enter location ">
    </div>

   <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone"  value="{{ Auth::user()->phone }}" placeholder="Enter phone "> 
    </div>
    

    <div class="form-group">
        <label for="blood_group">Blood Group</label>
          <select name="blood_group" class="form-control">
                <option value="">--Choose Blood Group--</option>
                <option value="A+" {{ $data->blood_group == 'A+' ? 'selected' : '' }}>A+</option>
                <option value="A-" {{ $data->blood_group == 'A-' ? 'selected' : '' }}>A-</option>
                <option value="B+" {{ $data->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                <option value="B-" {{ $data->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                <option value="AB+" {{ $data->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
                <option value="AB-" {{ $data->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
                <option value="O+" {{ $data->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                <option value="O-" {{ $data->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
          </select>     
      </div>

      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message"   placeholder="Enter message ">{{ old('message')}}</textarea>  
        </div>

        <input type="hidden" class="form-control" name="plasma_profile_id"  value="{{ $data->id }}" >
        {{-- <input type="hidden" class="form-control" name="user_id"  value="{{ Auth::user()->id }}" > --}}
  
    <button type="submit" class="btn btn-success">Save</button>
  
	</form>

  <hr>
  <p>
      <a href="{{ route('plasmaposts.index') }}" class="btn btn-primary">
        Back to Post
      </a>
    </p>

@endsection