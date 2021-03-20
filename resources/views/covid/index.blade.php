{{-- @extends('master')

@section('content')


        <h2><b>Covid Update</b></h2>
                
        <p>
            <a href="{{ route('covid.create')}}" class="btn btn-success">
                <i class="fa fa-plus">  Add Report</i>
            </a>
        </p>


          <!-- Main content -->
          <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                @foreach($covids as $covid)

              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>{{ $covid->infect }}</h3>
      
                    <p>New Infected</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  
                </div>
              </div>

              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>{{ $covid->death }}</h3>
      
                    <p>Death</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  
                </div>
              </div>
              
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3>{{ $covid->cure }}</h3>
      
                    <p>Cure</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>{{ $covid->test }}</h3>
      
                    <p>Total Test</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  
                </div>
              </div>

              <div>
              <a href="{{ route('covid.edit', $covid->id)}}" class="btn btn-success">
                <i class="fa fa-external-link-square"> Edit</i>
              </a>
              </div>

              

              @endforeach
              <!-- ./col -->
              
              <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
    
@endsection --}}



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
						<a href="{{ route('covid.show', $covid->id)}}" class="btn btn-info">
							<i class="fa fa-external-link-square">  Details</i>
						</a>						
  					<td>
				@endforeach
			</tbody>
		</table>

	</div>
	</div>

@stop