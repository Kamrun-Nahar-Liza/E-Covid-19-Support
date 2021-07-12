@extends('master')
    
    @section('content')

    <h2><b>Doctor Verification List</b></h2>

  {{-- doctor verification --}}

  <div>
		<table class="table table-bordered table-condensed">
			<thead class="thead-dark">
				<tr >
				
        <th>Name</th>
				<th>Role</th>
				<th>Email</th>
        <th>Phone</th>
				<th>Country</th>
        <th>Registered Doctor Code</th>
				<th>Status</th>
				<th>Action</th>
				</tr>
			</thead>

			<tbody>
        @foreach ($newdata as $user)
           
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->role }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone }}</td>
              <td>{{ $user->country }}</td>
              
                 <!-- Post model relation name category,name can be on uour wish-->
              <td>{{ $user->code }}</td>
              @if($user->is_doctor == 0)
              <td> <span class="label label-danger">Pending</span> </td>
              @else
             <td><span class="label label-success">Accepted</span></td>
              @endif
              
              <td>
                @if($user->is_doctor == 0)
                <button class="btn btn-success btn-xs Accept" data-id="{{$user->id}}">Accept</button>
              <div style="padding-top: 4px">
                <form action="{{ route('user.delete' , $user->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete?')">
			
                  {{ csrf_field() }}
      
                  <input name="_method" type="hidden" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-xs">
                      Delete
                  </button>
      
              </form> 
              </div>
                @else
                <button class="btn btn-warning btn-xs  Pending" data-id="{{$user->id}}">Pending</button>
                <div style="padding-top: 4px">
                <form action="{{ route('user.delete' , $user->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete?')">
			
                    {{ csrf_field() }}
        
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-danger btn-xs">
                        Delete
                    </button>
        
                </form>   
              </div>                          
                 @endif
                            
              </td>
            
        @endforeach
			</tbody>
		</table>

        
	</div>

  {{-- end verfication --}}


  <script>

   
    $(document).ready(function(){
    
       //Ban Users
        $(document).on('click', '.Accept', function(){
          var id = $(this).data('id');
          $('.loading').show();
            $.ajax({
              type: 'post',
              url: '/panel/doctors/accept',
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
              url: '/panel/doctors/pending',
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
