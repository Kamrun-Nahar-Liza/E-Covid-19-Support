@extends('master')

@section('content')
	<h2><b>Edit Plasma Post</b></h2>

	<form action="{{ route('covid.update', $covid->id) }}" method="post" enctype="multipart/form-data">

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
        <label for="infect">infect</label>
        <input type="text" class="form-control" name="infect"  value="{{ $covid->infect }}" placeholder="Enter infect ">
    </div>

    <div class="form-group">
        <label for="death">death</label>
        <input type="text" class="form-control" name="death"  value="{{ $covid->death }}" placeholder="Enter death ">
    </div>

    <div class="form-group">
        <label for="cure">cure</label>
        <input type="text" class="form-control" name="cure"  value="{{ $covid->cure }}" placeholder="Enter cure ">
    </div>

    <div class="form-group">
        <label for="test">test</label>
        <input type="text" class="form-control" name="test"  value="{{ $covid->test }}" placeholder="Enter test ">
    </div>

   
  
  
  <button type="submit" class="btn btn-primary">Update</button>
	</form>

  <hr>
  <p>
      <a href="{{ route('covid.index')}}" class="btn btn-success">
        Back
      </a>
    </p>
@endsection