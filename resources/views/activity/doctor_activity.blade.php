@extends('master')

@section('content')

	<div class="weLl">
		<h2><b>My Activities</b></h2>
        <h4><b>Recovery Instruction Posts</b></h4><br>
				
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
				 @if($post->user_id == Auth::user()->id)
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
                @endif
				@endforeach
			</tbody>
		</table>

	</div>
	</div>

@stop