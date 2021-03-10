@extends('master')

@section('content')
    <h2><b>Add Country Details</b></h2>

    <form action="{{ route('countries.store')}}" method="post" enctype="multipart/form-data">

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
        <label for="name">Country Name</label>
        <input type="text" class="form-control" name="name"  value="{{ old('name')}}" placeholder="Enter country name">
    </div>

    <div class="form-group">
        <label for="code">Country Code</label>
        <input type="text" class="form-control" name="code"  value="{{ old('code')}}" placeholder="Enter country code">
    </div>
    
    
    <button type="submit" class="btn btn-success">Save</button>
    </form>

    <hr>
    <p>
        <a href="{{ route('countries.index')}}" class="btn btn-primary">
            Back to Country List
        </a>
    </p>

@endsection