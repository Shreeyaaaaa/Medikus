@extends('admin.layouts.app')
@section('title')
Speciality List
@endsection
@section('content') 

<div class="page-wrapper">
<div class="content container-fluid">

 <!-- Page Header -->
                    
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-7 col-auto">
                                <h3 class="page-title">Specialities</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="admin-dashboard">Dashboard</a></li>
                                    
                                    <li class="breadcrumb-item active">List Of Specialities</li>
                                </ul>
                            </div>
                            <div class="col-sm-5 col">
                                <a href="speciality/create" class="btn btn-primary float-right mt-2">Add</a>
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
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="datatable table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>SN</th>
                                                    <th>Specialities</th>
                                                      <th></th>
                                                    <th class="text-right">Actions</th>

                                               
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @if(count($specialities)>0)
                                                @foreach($specialities as $key=> $speciality)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                      <td><img src="{{asset('specialities')}}/{{$speciality->image}}"  class="table-speciality-thumb rounded-circle"  alt=" ">
                                                        {{$speciality->speciality}}</td>
                                                    
                                                   <!--  <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar avatar-sm mr-2">
                                                                <img class="avatar-img" src="assets/img/specialities/specialities-01.png" alt="Speciality">
                                                            </a>
                                                            <a href="profile.html">Urology</a>
                                                        </h2>
                                                    </td> -->
                                                
                                                    <td class="text-right">
                                                        <div class="actions">
                                                            <a class="btn btn-sm bg-success-light"  href="{{route('speciality.edit',[$speciality->id])}}">
                                                                <i class="fe fe-pencil"></i> Edit
                                                            </a>
                                                              
                                                          </td>
                                                                <td class="text-left">
                                                              <div class="actions">
                                                            <form action="{{route('speciality.destroy',[$speciality->id])}}" method="post">@csrf
                                    @method('DELETE')
                                    <button type="submit"  class="btn btn-sm bg-danger-light"> <i class="fe fe-trash"></i></button>
                                    
                                </form>
                                                
                                </form>

                            </div>
                        </td>
                       
                    </tr>
           
                  



                    @endforeach
                   
                    @else 
                    <td>No specialities to display</td>
                    @endif
                
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection