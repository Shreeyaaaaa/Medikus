@extends('admin.layouts.app')
@section('title')
Doctor List
@endsection
@section('content')

<div class="page-wrapper">
                <div class="content container-fluid">



                    <!-- Page Header -->

                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-7 col-auto">
                                <h3 class="page-title">List of Doctors</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/admin-dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
                                    <li class="breadcrumb-item active">Doctor Index</li>
                                </ul>
                            </div>
                            <div class="col-sm-5 col">
                                <a href="doctor/create" class="btn btn-primary float-right mt-2">Add</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->


    <div class="row">
         <div class="col-sm-12">
            @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
                            <div class="card">
                                <div class="card-header">


                <form class="float-right" action="{{ route('doctor.index') }}" method="GET" role="search">
                       <div class="input-group">

                        <input type="text" class="form-control mr-2" name="term" placeholder="Search doctor" id="term">
                        <button class="btn btn-info" type="submit" title="Search doctor">
                                <i class="fa fa-search"></i>

                            </button>
                        <a href="{{ route('doctor.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <i class="fa fa-sync"></i>
                                </button>
                            </span>
                        </a>
                      
                    </div>

                </form>

                                         </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="datatable table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Doctor Name</th>

                                                    <th>Email</th>
                                                      <th>Address </th>
                                                       <th>Phone No</th>
                                                       <th>Speciality</th>
                                                    <!-- <th>Account Status</th> -->
                                                    <th class="nosort">&nbsp;</th>
                                                      <th class="nosort">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                  @if(count($users)>0)
                                                      @foreach($users as $key=> $user)
                                                <tr>

                                                     <td><img src="{{asset('images')}}/{{$user->image}}"  class="table-user-thumb rounded-circle" height="62" width="62" alt=" ">
                                                                 {{$user->name}}</td>
                                                             <td>{{$user->email}}</td>
                                                            <td>{{$user->address}}</td>
                                                            <td>{{$user->phone_number}}</td>
                                                            <td>{{$user->speciality}}</td>
                         <!--  <td>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="status_1" class="check" checked>
                                                            <label for="status_1" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td> -->


                        <td class="text-right">
                            <div class="table-actions">
                                <a href="#" data-toggle="modal" data-target="#exampleModal{{$user->id}}">
                                <i class="fe fe-eye"></i>
                                </a>
                                <a href="{{route('doctor.edit',[$user->id])}}" class="btn btn-sm bg-success-light"><i class="fe fe-pencil"></i>Edit</a>

                                <a href="{{route('doctor.show',[$user->id])}}" class="btn btn-sm bg-danger-light">
                                    <i class="fe fe-trash"></i>Delete
                                </a>

                            </div>
                        </td>

                        </tr>

                    <!-- View Modal -->

                   @include('admin.doctor.model')




                    @endforeach

                    @else
                    <td>No user to display</td>
                    @endif


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



@endsection

