@extends('master')

@section('content')

	<div class="weLl">
		<h2><b>My Activities</b></h2>
                <h4><b>Plasma Posts</b></h4><br>
		
		
		
		
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
                @if($plasmapost->user_id == Auth::user()->id)
				 
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
                    </td>
                    @endif
				@endforeach
			</tbody>
		</table>

	</div>
	</div>

@stop