@extends('doctors.layouts.app')

@section('content')

		
						 
						<div class="col-md-7 col-lg-8 col-xl-9">

							<div class="row">
								<div class="col-md-12">
									<div class="card dash-card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar1">
															<div class="circle-graph1" data-percent="75">
																<img src="assets/img/icon-01.png" class="img-fluid" alt="patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Total Patient</h6>
															<h3>1500</h3>
															<p class="text-muted">Till Today</p>
														</div>
													</div>
												</div>
												
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar2">
															<div class="circle-graph2" data-percent="65">
																<img src="assets/img/icon-02.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Today Patient</h6>
															<h3>160</h3>
															<p class="text-muted">06, Nov 2019</p>
														</div>
													</div>
												</div>
												
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget">
														<div class="circle-bar circle-bar3">
															<div class="circle-graph3" data-percent="50">
																<img src="assets/img/icon-03.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Appoinments</h6>
															<h3>85</h3>
															<p class="text-muted">06, Apr 2019</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<h4 class="mb-4">Patient Appoinment</h4>
									<div class="appointment-tab">
									
										<!-- Appointment Tab -->
										<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
											<li class="nav-item">
												<a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">Upcoming</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#today-appointments" data-toggle="tab">Today</a>
											</li> 
										</ul>
										<!-- /Appointment Tab -->
										
										<div class="tab-content">
										
											<!-- Upcoming Appointment Tab -->
											<div class="tab-pane show active" id="upcoming-appointments">
												<div class="card card-table mb-0">
													<div class="card-body">
														<div class="table-responsive">
															<table class="table table-hover table-center mb-0">
																<thead>
																	<tr><th class="text-center"></th>
																		<th class="text-center"></th>
																		<th class="text-center">Patient Name</th>
																		<th class="text-center">Appt Date</th>
																		<th>Appt Time</th>
																		<th class="text-center">Email</th>
																		<th class="text-center">Phone number</th>
																		<th class="text-center">Gender</th>
																		<th class="text-center">Doctor name</th>
																		<th class="text-center">Paid Amount</th>
																		<th>Status</th>
																		<th></th>
																		
																		<th></th>
																	</tr>
																</thead>
																<tbody>
                        @forelse($bookings as $key=>$booking)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td><img src="/images/{{$booking->user->image}}" width="80" style="border-radius: 50%;">
                          </td>

                          <td class="text-center">{{$booking->user->name}}</td>
                          <td class="text-center">{{$booking->date}}</td>
                          <td class="text-center">{{$booking->time}}</td>
                          <td class="text-center">{{$booking->user->email}}</td>
                          <td class="text-center">{{$booking->user->phone_number}}</td>
                          <td class="text-center">{{$booking->user->gender}}</td>
                          <td class="text-center">{{$booking->doctor->name}}</td>
                          <td></td>
                          <td class="text-center">
                              @if($booking->status==0)
                              <a href="{{route('update.status',[$booking->id])}}"><button class="btn btn-primary"> Pending</button></a>
                              @else 
                               <a href="{{route('update.status',[$booking->id])}}"><button class="btn btn-success"> Cheked</button></a>
                              @endif
                          </td>
                        </tr>
                        @empty
                        <td>There is no any appointments !</td>
                        @endforelse
                       
                      </tbody>
															</table>		
														</div>
													</div>
												</div>
											</div>
											<!-- /Upcoming Appointment Tab -->
									   
											<!-- Today Appointment Tab -->
											<div class="tab-pane" id="today-appointments">
												<div class="card card-table mb-0">
													<div class="card-body">
														<div class="table-responsive">
															<table class="table table-hover table-center mb-0">
																<thead>
																	<tr>
																		<th>Patient Name</th>
																		<th>Appt Date</th>
																		<th>Purpose</th>
																		<th>Type</th>
																		<th class="text-center">Paid Amount</th>
																		<th></th>
																	</tr>
																</thead>
															 <tbody>
                        @forelse($bookings as $key=>$booking)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td><img src="/profile/{{$booking->user->image}}" width="80" style="border-radius: 50%;">
                          </td>
                          <td>{{$booking->date}}</td>
                          <td>{{$booking->user->name}}</td>
                          <td>{{$booking->user->email}}</td>
                          <td>{{$booking->user->phone_number}}</td>
                          <td>{{$booking->user->gender}}</td>
                          <td>{{$booking->time}}</td>
                          <td>{{$booking->doctor->name}}</td>
                          <td>
                              @if($booking->status==0)
                              <a href="{{route('update.status',[$booking->id])}}"><button class="btn btn-primary"> Pending</button></a>
                              @else 
                               <a href="{{route('update.status',[$booking->id])}}"><button class="btn btn-success"> Cheked</button></a>
                              @endif
                          </td>
                        </tr>
                        @empty
                        <td>There is no any appointments !</td>
                        @endforelse
                       
                      </tbody>
																</tbody>
															</table>		
														</div>	
													</div>	
												</div>	
											</div>
											<!-- /Today Appointment Tab -->
											
										</div>
									</div>
								</div>
							</div>

						</div>
					
					
     	@endsection