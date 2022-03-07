@extends('admin.layouts.app')
@section('title')
Admin-Dashboard
@endsection
@section('content')
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome {{Auth::user()->name}}</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-user"></i>
										</span>
										<div class="dash-count">
											<h3>{{ \DB::table('users')->where('role_id', '1')->count() }}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										<h6 class="text-muted">Doctors</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-users"></i>
										</span>
										<div class="dash-count">
											<h3>{{ \DB::table('users')->where('role_id', '3')->count() }}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">Patients</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-danger border-danger">
											<i class="fe fe-folder"></i>
										</span>
										<div class="dash-count">
											<h3>{{ \DB::table('appointments')->count() }}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">Appointment Available</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-warning border-warning">
											<i class="fe fe-money"></i>
										</span>
										<div class="dash-count">
											<h3>{{ \DB::table('bookings')->count() }}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">Appointment Booked</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-warning w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col-md-6 d-flex">
						
							<!-- Doctor List  -->
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Doctors List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												
												<tr>
													<th>Doctor Name</th>
													<th>Speciality</th>
													<th>Email</th>
													<th>Reviews</th>
												</tr>
											
											</thead>
											<tbody>
												 @foreach(App\Models\User::all() as $user)
                                                    @if(($user->role_id==1))<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('images')}}/{{$user->image}}" alt="User Image"></a>
															<a href="profile.html">{{$user->name}}</a>
														</h2>
													</td>
													<td>{{$user->speciality}}</td>
											<td>{{$user->email}}</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
												 @endif
                        </tr>
                         @endforeach
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Doctor List  -->
							
						</div>
						<div class="col-md-6 d-flex">
						
							<!--Patients List -->
							<div class="card  card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Patients List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>													
													<th>Patient Name</th>
													<th>Phone</th>
													<th>DOB</th>
													<th>Email</th>													
												</tr>
											</thead>
											<tbody>
												
													@foreach(App\Models\User::all() as $user)
                                                    @if(($user->role_id==3))
                                                    <tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('profile')}}/{{$user->image}}" alt="Image"></a>
															<a href="{{url('profile')}}">{{$user->name}} </a>
														</h2>
													</td>
													<td>{{$user->phone_number}}</td>
													<td>{{$user->DOB}}</td>
													<td class="text-right">{{$user->email}}</td>
												 @endif
                        </tr>
                         @endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Patient List -->
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						
							<!--Appointment List -->
							<div class="card card-table">
								<div class="card-header">
									<h4 class="card-title">Appointment List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													
                          <th scope="col">Doctor</th>
                           <th scope="col">Patient</th>
                          <th scope="col">Time</th>
                          <th scope="col">Date for</th>
                          <th scope="col">Created date</th>
                          <th scope="col">Status</th>
                          <th></th>
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
							<!-- /Doctor List  -->
							
						</div>
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
       @endsection