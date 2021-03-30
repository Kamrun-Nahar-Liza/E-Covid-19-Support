@extends('master')

@section('content')

	<div class="weLl">
		<h2><b>Country List</b></h2>
		
		<p>
			@if( Auth::user()->role == "admin" || (Auth::user()->role == "doctor" && Auth::user()->is_doctor == "1") || Auth::user()->role == "patient")
			<a href="{{ route('countries.create')}}" class="btn btn-success">
				<i  class="fa fa-plus">Add Country </i>
			</a>
			<marquee>(**Add if it is not avilable in this list**)</marquee>
			@endif
		</p>
		

		@if(session()->has('message'))
 			<div class="alert alert-danger">
   				 {{ session('message')}}
 			</div>
		@endif
		
		<table class="table table-bordered table-condensed">
			<thead>
				<tr>
				
				<th>Country Name</th>
				<th>Country Code</th>
				<th>Action</th>

				</tr>
			</thead>

			<tbody>

				@foreach($countries as $country)
				<tr>
					
					<td>{{ $country->name }}</td>
					<td>{{ $country->code }}</td>
					<td>
						<a href="{{ route('countries.show', $country->id)}}" class="btn btn-info">
							<i>Details</i>
						</a>
					</td>

				</tr>
				@endforeach

			</tbody>
		</table>
	</div>

@stop