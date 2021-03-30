@extends('master')

@section('content')

	<h3>Country Name : {{ $country->name }}</h3>

	<p>
		Country Code: {{ $country->code }}
	</p>

	<p>
		Created At: {{ $country->created_at->diffforHumans() }}
	</p>

	@if( Auth::user()->role == "admin")

	<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

	<div class="btn-group mr-2" role="group" aria-label="First group">

		<a href="{{ route('countries.edit' , $country->id) }}" class="btn btn-success"> Edit </a>

	</div>
	

	<div class="btn-group mr-2" role="group" aria-label="Second group">

		<form action="{{ route('countries.destroy' , $country->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete?')">
			
			{{ csrf_field() }}

            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="btn btn-danger">
            	Delete
            </button>

		</form>
	</div>
	
	</div>

	@endif


	<hr>
	<div>
		<a href="{{ route('countries.index')}}" class="btn btn-primary">
        Back to Country List
      </a>
	</div>

<hr>
	<h2>Post under {{ $country->name }}</h2>
		

		<table class="table table-bordered table-condensed">
			<thead>
				<tr>
				<th>Country</th>
				<th>Recovery Post Title</th>
				<th>Synptoms</th>
				<th>Recovery Instructions</th>
				<th>Author</th>
				<th>Status</th>
				<th>Action</th>
				</tr>
			</thead>

			<tbody>

				@foreach($country->posts as $post)
				<tr>
					<td>{{ $post->country->name }}</td>
					<td>{{ $post->symptoms }}</td>
					<td>{{ $post->title }}</td>
					<td>{!! htmlspecialchars_decode($post->content) !!}</td>   
					<td>{{ $post->user->name }}</td>
					<td>{{ $post->status == 1 ? 'Active' : 'Inactive' }}</td>
					<td>
						<a href="{{ route('posts.show', $post->id)}}" class="btn btn-info">
							<i>Details</i>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table> 

@endsection