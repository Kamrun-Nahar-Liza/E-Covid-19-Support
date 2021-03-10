@extends('master')

@section('content')

	<div class="weLl">
		<h2><b>Plasma Post List</b></h2>
		
		<p>
			<a href="{{ route('plasmaposts.create')}}" class="btn btn-success">
				<i class="fa fa-plus">  Add Plasma Post</i>
			</a>
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
				<th>Contact & Address</th>
				<th>Blood Group</th>
				<th>Recommand by</th>
				<th>Action</th>
				</tr>
			</thead>

			<tbody>

				@foreach($plasmaposts as $plasmapost)
				 
				<tr>
					<td>{{ $plasmapost->country->name }}</td>
					<td>{{ $plasmapost->title }}</td>
                    <td>{{ $plasmapost->content }}</td>
					<td>{{ $plasmapost->blood_group }}</td>
					   <!-- Post model relation name category,name can be on uour wish-->
					<td>{{ $plasmapost->user->name }}</td>
					
					<td>
						<a href="{{ route('plasmaposts.show', $plasmapost->id)}}" class="btn btn-info">
							<i class="fa fa-external-link-square">  Details</i>
						</a>						
  					<td>
				@endforeach
			</tbody>
		</table>

	</div>
	</div>

@stop