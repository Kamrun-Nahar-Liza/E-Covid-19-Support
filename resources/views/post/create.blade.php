@extends('master')
@push('style')
    <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endpush
@section('content')
	<h2><b>Add Recovery Post</b></h2>

	<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">

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
        <label for="symptoms">Syntomps of Covid-19</label>
        <input type="text" class="form-control" name="symptoms"  value="{{ old('symptoms')}}" placeholder="Enter symptoms of covid-19 ">
    </div>

   <div class="form-group">
    <label for="content">Recovery Instructions</label>
    <textarea class="form-control summernote" name="content"  placeholder="Enter post content ">{{ old('content')}}</textarea>  
    </div>


    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>  
    </div>
  
  
    <button type="submit" class="btn btn-success">Save</button>
  
	</form>

  <hr>
  <p>
      <a href="{{ route('posts.index') }}" class="btn btn-primary">
        Back to Post
      </a>
    </p>

@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.summernote').summernote({
      placeholder: 'Enter Recovery Instructions',
      tabsize: 2,
      height: 200
    });
  });
</script>
@endpush