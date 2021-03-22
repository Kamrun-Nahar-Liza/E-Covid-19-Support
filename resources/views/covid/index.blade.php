@extends('master')

@section('content')

	<div class="weLl">
		<h2><b>Covid List</b></h2>
		
		<p>
			<a href="{{ route('covid.create')}}" class="btn btn-success">
				<i class="fa fa-plus">  Add </i>
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
				<th>Infected</th>
                <th>Death</th>
				<th>Cure</th>
				<th>Test</th>
				<th>Date</th>
				<th>Action</th>
				</tr>
			</thead>

			<tbody>

				@foreach($covids as $covid)
				 
				<tr>
					<td>{{ $covid->infect }}</td>
					<td>{{ $covid->death }}</td>
                    <td>{{ $covid->cure }}</td>
					<td>{{ $covid->test }}</td>
					   
					<td>{{ $covid->created_at }}</td>
					
					<td>
						<a href="{{ route('covid.edit', $covid->id)}}" class="btn btn-info">
							<i class="fa fa-external-link-square">  Edit</i>
						</a>						
  					<td>
				@endforeach
			</tbody>
		</table>

	</div>
	</div>

@stop