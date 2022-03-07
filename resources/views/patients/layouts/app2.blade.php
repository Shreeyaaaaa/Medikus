<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>Medikus</title>
	<meta content="" name="description">
  <meta content="" name="keywords">

	<!-- Favicons -->
	<link type="image/x-icon" href="adminassets/img/Logosm.png" rel="icon">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		
</head>
<body>
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
		
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">@yield('title')</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						
							<!-- Profile Sidebar -->
					<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						<div class="profile-sidebar">
							<div class="widget-profile pro-widget-content">
								<div class="profile-info-widget">
									<a href="#" class="booking-doc-img">
										<img src="assets/img/patients/patient.jpg" alt="User Image">
									</a>
									<div class="profile-det-info">
										<h3>{{ Auth::user()->name }}</h3>
										<div class="patient-details">
											<h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
											<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
										</div>
									</div>
								</div>
							</div>
							<div class="dashboard-widget">
								<nav class="dashboard-menu">
									<ul>
										<li>
											<a href="patient-dashboard">	<i class="fas fa-columns"></i>
												<span>Dashboard</span>
											</a>
										</li>
										<li>
											<a href="favourites">	<i class="fas fa-bookmark"></i>
												<span>Favourites</span>
											</a>
										</li>
										<li class="active">
											<a href="dependent">	<i class="fas fa-users"></i>
												<span>Dependent</span>
											</a>
										</li>
										
										<li>
											<a href="profile-settings">	<i class="fas fa-user-cog"></i>
												<span>Profile Settings</span>
											</a>
										</li>
										<li>
											<a href="change-password">	<i class="fas fa-lock"></i>
												<span>Change Password</span>
											</a>
										</li>
										<li>
											 <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<!-- / Profile Sidebar -->



            @yield('content')
       

        </div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{asset('js/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('js/popper.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		
		
		<!-- Sticky Sidebar JS -->
        <script src="{{asset('plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{asset('plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('js/script.js') }}"></script>
		
	</body>

</html>