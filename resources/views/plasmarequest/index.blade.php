@extends('master')

@section('content')

	<div class="weLl">
		<h2><b>Send Request List</b></h2>
		
		<p>
			{{-- <a href="{{ route('plasmarequests.create')}}" class="btn btn-success">
				<i class="fa fa-plus">  Add Plasma Request</i>
			</a> --}}
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
				<th>Blood Group</th>
                <th>Location</th>
				<th>Contact</th>
				<th>Message</th>
				<th>Request To</th>
				<th>Status</th>
				<th>Action</th>
				</tr>
			</thead>

			<tbody>

				@foreach($plasmarequests as $plasmarequest)
				 @if(Auth::user()->id == $plasmarequest->user_id)
				<tr>
                    <td>{{ $plasmarequest->blood_group }}</td>
					<td>{{ $plasmarequest->location }}</td>
					<td>{{ $plasmarequest->phone }}</td>
                    <td>{{ $plasmarequest->message }}</td>
					
					   <!-- Post model relation name category,name can be on uour wish-->
					<td>{{ $plasmarequest->first_name }} {{ $plasmarequest->last_name }}</td>
					@if($plasmarequest->status == 0)
					<td> <span class="label label-danger">Pending</span> </td>
					@else
					<td><span class="label label-success">Accepted</span></td>
					@endif
					
					<td>
						@if($plasmarequest->status == 0)
						<span class="label label-danger">Waiting for accept</span> 
						@else
						<a href="{{ route('donorinfo', $plasmarequest->id)}}" class="btn btn-info">
						<i class="fa fa-external-link-square">  Details</i>
						</a>
						@endif
												
					</td>
					@endif
				@endforeach
			</tbody>
		</table>

	</div>
	</div>

@stop