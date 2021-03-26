@extends('master')

@section('content')

	<div class="weLl">
		<h2><b>Recovery Instructions List</b></h2>
		
		<p>
			@if( Auth::user()->role == "doctor" && Auth::user()->is_doctor == "1")
			<a href="{{ route('posts.create')}}" class="btn btn-success">
				<i class="fa fa-plus">  Add Recovery Instructions Post</i>
			</a>
			@endif
		</p>
		
		
		@if(session()->has('message'))
 			<div class="alert alert-danger">
   				 {{ session('message')}}
 			</div>
		@endif

		<div>
		<table class="table table-bordered table-condensed">
			<thead class="thead-dark">
				<tr >
				<th>Country</th>
                <th>Title</th>
				<th>Syntomps of covid-19</th>
				<th>Recovery Instruction</th>
				<th>Recommand by</th>
				<th>Status</th>
				<th>Action</th>
				</tr>
			</thead>

			<tbody>

				@foreach($posts as $post)
				 
				<tr>
					<td>{{ $post->country->name }}</td>
					<td>{{ $post->title }}</td>
                    <td>{{ $post->symptoms }}</td>
					<td>{!! htmlspecialchars_decode($post->content) !!}</td>
					   <!-- Post model relation name category,name can be on uour wish-->
					<td>{{ $post->user->name }}</td>
					<td>{{ $post->status == 1 ? 'Active' : 'Inactive' }}</td>
					<td>
						<a href="{{ route('posts.show', $post->id)}}" class="btn btn-info">
							<i class="fa fa-external-link-square">  Details</i>
						</a>						
  					<td>
				@endforeach
			</tbody>
		</table>

	</div>
	</div>

@stop