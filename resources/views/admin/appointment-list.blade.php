@extends('admin.layouts.app')
@section('title')
Appointment List
@endsection
@section('content')	 

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
        
          <!-- Page Header -->
          <div class="page-header">
            <div class="row">
              <div class="col-sm-12">
                <h3 class="page-title">Appointments</h3>
                
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
                          
                          <th scope="col">Doctor</th>
                           <th scope="col">Patient</th>
                          <th scope="col">Time</th>
                          <th scope="col">Date for</th>
                          <th scope="col">Created date</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                              @forelse(App\Models\Booking::all() as $b)
                     
                                <tr>
                                  <td>
                                    <h2 class="table-avatar">
                                      <a href="" class="avatar avatar-sm mr-2">
                                        <img class="avatar-img rounded-circle" src="{{asset('images')}}/{{$b->doctor->image}}" alt="User Image">
                                      </a>
                                      <a href="">{{$b->doctor->name}}  <span></span></a>
                                    </h2>
                                  </td>
                                  <td>{{$b->user->name}} </td>
                                  <td>{{$b->time}}  </td>
                                  <td>{{$b->date}} </td>
                                  <td> {{$b->created_at}} </td>
                                 
                                  <td>
                              @if($b->status==0)
                              <button class="btn btn-primary">Not visited</button>
                              @else 
                              <button class="btn btn-success"> Cheked</button>
                              @endif
                          </td>
                                  
                                  <td class="text-right">
                                    <div class="table-action">
                                      <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                        <i class="fas fa-print"></i> Print
                                      </a>
                                      <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                        <i class="far fa-eye"></i> View
                                      </a>
                                    </div>
                                  </td>

                                </tr>
            @empty
                                 <tr>
                        <td>You have no any appointments</td>
                        </tr>
                      
                                 @endforelse
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
