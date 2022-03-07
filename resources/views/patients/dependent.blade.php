@extends('patients.layouts.app')
@section('title')
Dependent
@endsection
@section('content')	 

		
					<div class="col-md-7 col-lg-8 col-xl-9">
						<div class="card">
							<div class="card-body ">	<a href="add-dependent" class="btn book-btn add-btn" tabindex="0">Add Dependent</a>
								<!-- Dependent Tab -->
								<div class="mt-4">
									<div class="card card-table mb-0">
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-hover table-center mb-0">
													<thead>
														<tr>
															<th>Doctor</th>
															<th>Relationship</th>
															<th>gender</th>
															<th>Number</th>
															<th>Email</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Ruby Perrin <span>Dental</span></a>
																		</h2>
															</td>
															<td>Son</td>
															<td>Male</td>
															<td>9854367346</td>
															<td>abc@gmail.com</td>
															<td>
																<div class="table-action">
																	<a href="edit-dependent.html" class="btn btn-sm bg-info-light">	<i class="fas fa-edit"></i> Edit</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Ruby Perrin <span>Dental</span></a>
																		</h2>
															</td>
															<td>Daughter</td>
															<td>Female</td>
															<td>9854367346</td>
															<td>abc@gmail.com</td>
															<td>
																<div class="table-action">
																	<a href="edit-dependent.html" class="btn btn-sm bg-info-light">	<i class="fas fa-edit"></i> Edit</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Ruby Perrin <span>Dental</span></a>
																		</h2>
															</td>
															<td>Father</td>
															<td>Male</td>
															<td>9854367346</td>
															<td>abc@gmail.com</td>
															<td>
																<div class="table-action">
																	<a href="edit-dependent.html" class="btn btn-sm bg-info-light">	<i class="fas fa-edit"></i> Edit</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Ruby Perrin <span>Dental</span></a>
																		</h2>
															</td>
															<td>Mother</td>
															<td>Male</td>
															<td>9854367346</td>
															<td>abc@gmail.com</td>
															<td>
																<div class="table-action">
																	<a href="edit-dependent.html" class="btn btn-sm bg-info-light">	<i class="fas fa-edit"></i> Edit</a>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!-- /Dependent Tab -->
							</div>
						</div>
					</div>
				
	@endsection