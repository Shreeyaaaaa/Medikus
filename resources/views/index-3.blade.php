@extends('layouts.app')

@section('content')
		<!-- Home Banner -->
		<section id="home" class="divider">
			<div class="container-fluid p-0">
			<!--- slider ---->
				<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2500"> 
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img class="d-block w-100" src="assets/img/slider/slider-1.jpg" alt="First slide">
					  <div class="carousel-caption d-none d-md-block">
						  <span>We Provide Solution</span>
						  <h2>To stressless Life</h2>
						  <p>People who are more perfectionist are most likely to be depressed,<br>Because they stress themselves out so much.</p>
						</div>
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="assets/img/slider/slider-2.jpg" alt="Second slide">
					  <div class="carousel-caption d-none d-md-block">
						  <span>We Provide Solution</span>
						  <h2>Health Care So llution</h2>
						  <p></p>
						</div>
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="assets/img/slider/slider-3.jpg" alt="Third slide">
					  <div class="carousel-caption d-none d-md-block">
						  <span>We Provide total</span>
						  <h2>Personalised care</h2>
						  <p></p>
						</div>
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			<!--- /slider ---->
				 <!-- Search -->




				<div class="banner-wrapper">
					<div class="search-box search-box-3">

						<form action="{{url('/searchdoctor')}}">
							<div class="form-group search-location">
								<input type="text" class="form-control" placeholder="Search Location">
							</div>
							<div class="form-group search-info">
								<input type="text" name="date" class="form-control"  id ="datepicker" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
							</div>
							<button type="submit" class="btn btn-primary search-btn btn-search mt-0"><i class="fas fa-search"></i>  <span>Search</span>
							</button>
						</form>
					
					</div>
				</div>
				<!-- /Search -->
			</div>
		</section>
		<!-- /Home Banner -->
		<!-- Clinic and Specialities -->
		<section class="section section-specialities">
			<div class="container-fluid">
				<div class="section-header text-center">
					<h2>Our Specialities</h2>
					<p class="sub-title"></p>
				</div>
				<div class="row justify-content-center">
					
                                  <div class="col-md-9">
						<!-- Slider -->
						<div class="specialities-slider slider">
							<!-- Slider Item -->
							@foreach(App\Models\Speciality::all() as $s)
                            
							<div class="speicality-item text-center">
								<div class="speicality-img">
									<img src="{{asset('specialities')}}/{{$s->image}}" class="img-fluid" alt="Speciality">	<span><i class="fa fa-circle" aria-hidden="true" style="color:#007bff;"></i></span>
								</div>
								<p>{{$s->speciality}}</p>
							</div>

                         @endforeach
							<!-- /Slider Item -->
							
						</div>
						<!-- /Slider -->
					</div>
					 
				</div>
			</div>
		</section>
		<!-- Clinic and Specialities -->

		<!-- hospital ---->

		<section class="section section-specialities">
			<div class="container-fluid">
				<div class="section-header text-center">
					<h2>Our Hospitals</h2>
					<p class="sub-title"></p>
				</div>
				<div class="row justify-content-center">
					
                                  <div class="col-md-9">
						<!-- Slider -->
						<div class="specialities-slider slider">
							<!-- Slider Item -->
							@foreach(App\Models\Hospital::all() as $h)
                            
							<div class="speicality-item text-center">
								<div class="speicality-img">
									<img src="{{asset('hospitals')}}/{{$h->image}}" class="img-fluid" alt="Hospital">	<span><i class="fa fa-circle" aria-hidden="true" style="color:#007bff; size: 40px;"></i></span>
								</div>
								<p>{{$h->hospital}}</p>
							</div>

                         @endforeach
							<!-- /Slider Item -->
							
						</div>
						<!-- /Slider -->
					</div>
					 
				</div>
			</div>
		</section>
		
		<!-- Popular Section -->
		<section class="section section-doctor">
			<div class="container-fluid">
				<div class="section-header text-center">
					<h2>Book Our Best Doctor</h2>
					<p class="sub-title"></p>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="doctor-slider slider">
							<!-- Doctor Widget -->
							@foreach(App\Models\User::all() as $user)
                                                    @if(($user->role_id==1))
							<div class="profile-widget">
								<div class="doc-img">
									<a href="doctor-profile">
										<img class="img-fluid" alt="User Image" src="{{asset('images')}}/{{$user->image}}">
									</a>
									<a href="javascript:void(0)" class="fav-btn">	<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
											<a href="doctor-profile">{{$user->name}}</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
									<p class="speciality">{{$user->speciality}}</p>
									<!-- <div class="rating">	<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<span class="d-inline-block average-rating">(17)</span>
									</div>
									<ul class="available-info">
										<li>	<i class="fas fa-map-marker-alt"></i> {{$user->address}}</li>
										<li>	<i class="far fa-clock"></i> Available on Fri, 22 Mar</li>
										<li>	<i class="far fa-money-bill-alt"></i> $300 - $1000	<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul> -->
									<div class="row row-sm">
										<div class="col-6">	<a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">	<a href="" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
							    @endif
                     
                         @endforeach
							<!-- /Doctor Widget -->
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Blog Section -->
		<!-- Footer -->
	@endsection