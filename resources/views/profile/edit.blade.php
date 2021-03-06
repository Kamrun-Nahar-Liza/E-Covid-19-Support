@extends('profilelayout')

@section('title')
Doctor Profile
@endsection

@section('content')

<form action="{{ route('profiles.update', $profile->id) }}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}


    @if ($errors->any())
    <div class="alert alert-danger">
            @if($errors->count() == 1)
              {{ $errors->first() }}
            @else
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            
        </ul>
        @endif
    </div>
    @endif

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message')}}
    </div>
    @endif

    
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Profile</h4>
                    </div>
                </div>
                 <form method="POST" action="{{ route('profiles.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input name="_method" type="hidden" value="PUT">

                    <div class="card-box">
                        <h3 class="card-title">Basic Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block" src="{{ asset('uploads/doctor/' . $profile->profile_pic) }}" alt="user" value="">
                                    <div class="fileupload btn">
                                        <span class="btn-text">Choose picture</span>
                                        <input class="upload" type="file" name="profile_pic">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">First Name</label>
                                                <input type="text" class="form-control floating" name="first_name"  value="{{ $profile->first_name }}" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Last Name</label>
                                                <input type="text" class="form-control floating" name="last_name"  value="{{ $profile->last_name }}" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Department</label>
                                                <input type="text" class="form-control floating" name="department"  value="{{ $profile->department }}">
                                            </div>
                                        </div>
                                         
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title">Contact Informations</h3>
                        <div class="row">
                           
                            {{-- <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Phone Number</label>
                                    <input type="text" class="form-control floating" name="phone"  value="{{ $profile->phone }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Country</label>
                                    <input type="text" class="form-control floating" name="country"  value="{{ $profile->country }}">
                                </div>
                            </div> --}}

                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Designation</label>
                                    <input type="text" class="form-control floating" name="designation"  value="{{ $profile->designation }}" >
                                </div>
                            </div>

                        </div>
                    </div>
                    
                <div class="text-center m-t-20">
                       <!--  <button class="btn btn-primary submit-btn" type="button">Save</button> -->
                         <button type="submit" class="btn btn-primary submit-btn">Update</button>
                </div>
            </form>
            </div>
        </div>


@endsection
    
    