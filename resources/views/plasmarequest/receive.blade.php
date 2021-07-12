@extends('master')

@section('content')

	<div class="weLl">
		<h2><b>Get Request List</b></h2>
		
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
        {{-- <th>Location</th>
				<th>Contact</th> --}}
				<th>Message</th>
        <th>Send By</th>
				<th>Request To</th>
				<th>Status</th>
				<th>Action</th>
				</tr>
			</thead>

			<tbody>
        @foreach ($user->plasmaprofile as $plasmaprofile)
            @foreach($plasmaprofile->plasmarequest as $plasmarequest)
            <tr>
              <td>{{ $plasmarequest->blood_group }}</td>
              {{-- <td>{{ $plasmarequest->location }}</td>
              <td>{{ $plasmarequest->phone }}</td> --}}
              <td>{{ $plasmarequest->message }}</td>
              <td>{{ $plasmarequest->user->name }}</td>
              
                 <!-- Post model relation name category,name can be on uour wish-->
              <td>{{ $plasmarequest->first_name }} {{ $plasmarequest->last_name }}</td>
              @if($plasmarequest->status == 0)
              <td> <span class="label label-danger">Pending</span> </td>
              @else
             <td><span class="label label-success">Accepted</span></td>
              @endif
              
              <td>
                @if($plasmarequest->status == 0)
                <button class="btn btn-success btn-xs Accept" data-id="{{$plasmarequest->id}}">Accept</button>
                @else
                <button class="btn btn-danger btn-xs  Pending" data-id="{{$plasmarequest->id}}">Make Pending</button>                             
                 @endif
                            
              </td>
            @endforeach
        @endforeach
			</tbody>
		</table>

        
	</div>
	</div>

    <script>

   
        $(document).ready(function(){
        
           //Ban Users
            $(document).on('click', '.Accept', function(){
              var id = $(this).data('id');
              $('.loading').show();
                $.ajax({
                  type: 'post',
                  url: '/panel/users/accept',
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                  },
                  success: function(data) {  
                      location.reload();
                      toastr.success(' ', 'Accept', {timeOut: 5000, positionClass: 'toast-top-center'});
                      $('.loading').hide();
                  }
              });
            });
        
            //Unban Freelancers
            $(document).on('click', '.Pending', function(){
              var id = $(this).data('id');
              $('.loading').show();
                $.ajax({
                  type: 'post',
                  url: '/panel/users/pending',
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                  },success: function(data) {  
                      location.reload();
                      toastr.success(' ', 'Pending', {timeOut: 5000, positionClass: 'toast-top-center'});
                      $('.loading').hide();
                  }
              });
            });
           
        });//document.ready
        
            </script>     

@stop