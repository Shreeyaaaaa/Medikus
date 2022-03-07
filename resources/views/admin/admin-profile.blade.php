@extends('admin.layouts.app')

@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Admin Profile</h3>
                        
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#">
                                    <img class="rounded-circle" alt="User Image"
                                         src="{{asset('images')}}/{{Auth::user()->image}}">
                                </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">   {{ Auth::user()->name }}</h4>
                                <h6 class="text-muted">   {{ Auth::user()->email }}</h6>
                                <div class="user-Location"><i class="fa fa-map-marker"></i> {{ Auth::user()->address }}
                                </div>
                                <div class="about-text"></div>
                            </div>
                            <div class="col-auto profile-btn">

                                <a data-toggle="modal" href="#edit_personal_details" class="btn btn-primary">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content profile-tab-cont">

                        <!-- Personal Details Tab -->
                        <div class="tab-pane fade show active" id="per_details_tab">

                            <!-- Personal Details -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Personal Details</span>
                                                <a class="edit-link" data-toggle="modal"
                                                   href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a>
                                            </h5>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                                <p class="col-sm-10">{{ Auth::user()->name }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Date of
                                                    Birth</p>
                                                <p class="col-sm-10">{{ Auth::user()->DOB }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
                                                <p class="col-sm-10">{{ Auth::user()->email }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                                <p class="col-sm-10">{{ Auth::user()->phone_number }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Address</p>
                                                <p class="col-sm-10 mb-0">{{ Auth::user()->address }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted text-sm-right mb-0">About</p>
                                                <p class="col-sm-10 mb-0">{{ Auth::user()->description }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Edit Details Modal -->
                                    <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Personal Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="forms-sample"
                                                          action="{{route('profile.store')}}" method="post"
                                                          enctype="multipart/form-data">
                                                          @csrf
                                                        
                                                        <div class="row form-row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Name</label>
                                                                    <input type="text" class="form-control"
                                                                           value="{{Auth::user()->name}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Email ID</label>
                                                                    <input type="email" class="form-control"
                                                                           value="{{Auth::user()->email}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Address</label>
                                                                    <input type="text" class="form-control"
                                                                           value="{{Auth::user()->address}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Date of Birth</label>

                                                                    <input type="Date" class="form-control"
                                                                           value="{{ Auth::user()->dob }}">

                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Mobile</label>
                                                                    <input type="text"
                                                                           value="{{ Auth::user()->phone_number }}"
                                                                           class="form-control">
                                                                </div>
                                                            </div>


                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Gender</label>
                                                                    <select
                                                                        class="form-control @error('gender') is-invalid @enderror"
                                                                        name="gender">

                                                                        <option
                                                                            value="{{Auth::user()->gender}}"></option>

                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label>Image</label>
                                                                    <input type="file"
                                                                           class="form-control file-upload-info @error('image') is-invalid @enderror"
                                                                           placeholder="Upload Image" name="image">
                                                                    <span class="input-group-append">

												                        </span>
                                                                    @error('image')
                                                                    <span class="invalid-feedback" role="alert">
												                                        <strong>{{ $message }}</strong>
												                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="exampleTextarea1">About</label>
                                                                    <input type="textarea" class="form-control"
                                                                           value="{{Auth::user()->description}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-block">Save
                                                            Changes
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Edit Details Modal -->

                                </div>


                            </div>
                            <!-- /Personal Details -->

                        </div>
                        <!-- /Personal Details Tab -->

                        <!-- Change Password Tab -->
                        <div id="password_tab" class="tab-pane fade">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Change Password</h5>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6">
                                            <form method="post" action="">
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Change Password Tab -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection
