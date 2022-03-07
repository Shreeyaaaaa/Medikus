@extends('admin.layouts.app')
@section('title')
Patient List
@endsection
@section('content') 

      <!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
        
          <!-- Page Header -->
          <div class="page-header">
            <div class="row">
              <div class="col-sm-12">
                <h3 class="page-title">List of Patient</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
                  <li class="breadcrumb-item active">Patient</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /Page Header -->
          
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <div class="table-responsive">
                    <table class="datatable table table-hover table-center mb-0">
                      <thead>
                        
                        <tr>
                          <th>Patient ID</th>
                          <th>Patient Name</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th> DOB</th>
                          <th>Phone</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        
                          @if(count($users)>0)
                           @foreach($users as $key=> $user)
                                                <tr>
                                                     <td>{{$key+1}}</td>
                                                     <td><img src="{{asset('profile')}}/{{$user->image}}"  class="table-user-thumb rounded-circle" height="62" width="62" alt=" ">
                                                      {{$user->name}}</td>
                                                             <td>{{$user->email}}</td>
                                                            <td>{{$user->address}}</td>
                                                            <td>{{$user->DOB}}</td>
                                                            <td>{{$user->phone_number}}</td>
                                                            @endforeach
                   
                    @else 
                    <td>No user to display</td>
                    @endif
                                
                        </tr>
                        </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>
            </div>      
          </div>
          
        </div>      
      </div>
      <!-- /Page Wrapper -->
    
    @endsection
