@extends('profilelayout')

@section('title')
Plasma Donor Profile
@endsection

@section('content')

<form action="{{ route('plasmaprofiles.update', $plasmaprofile->id) }}" method="post" enctype="multipart/form-data">

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
                 <form method="POST" action="{{ route('plasmaprofiles.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input name="_method" type="hidden" value="PUT">

                    <div class="card-box">
                        <h3 class="card-title">Basic Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block" src="{{ asset('uploads/plasmadonor/' . $plasmaprofile->profile_pic) }}" alt="user" value="">
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
                                                <input type="text" class="form-control floating" name="first_name"  value="{{ $plasmaprofile->first_name }}" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Last Name</label>
                                                <input type="text" class="form-control floating" name="last_name"  value="{{ $plasmaprofile->last_name }}" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="blood_group">Blood Group</label>
                                              <select name="blood_group" class="form-control">
                                                    <option value="">--Choose Blood Group--</option>
                                                    <option value="A+" {{ $plasmaprofile->blood_group == 'A+' ? 'selected' : '' }}>A+</option>
                                                    <option value="A-" {{ $plasmaprofile->blood_group == 'A-' ? 'selected' : '' }}>A-</option>
                                                    <option value="B+" {{ $plasmaprofile->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                                                    <option value="B-" {{ $plasmaprofile->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                                                    <option value="AB+"{{ $plasmaprofile->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
                                                    <option value="AB-"{{ $plasmaprofile->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
                                                    <option value="O+" {{ $plasmaprofile->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                                                    <option value="O-" {{ $plasmaprofile->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
                                              </select>     
                                          </div>

                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title">Contact Informations</h3>
                        <div class="row">
                           
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Phone Number</label>
                                    <input type="text" class="form-control floating" name="phone"  value="{{ $plasmaprofile->phone }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Country</label>
                                    <input type="text" class="form-control floating" name="country"  value="{{ $plasmaprofile->country }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Area</label>
                                    <input type="text" class="form-control floating" name="area"  value="{{ $plasmaprofile->area }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Address</label>
                                    <input type="text" class="form-control floating" name="phone"  value="{{ $plasmaprofile->address }}">
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
    
    