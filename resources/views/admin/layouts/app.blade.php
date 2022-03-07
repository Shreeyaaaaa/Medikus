<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>@yield('title')</title>
	<meta content="" name="description">
  <meta content="" name="keywords">
		<!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{asset('adminassets/img/Logosm.png')}}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('adminassets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('adminassets/css/font-awesome.min.css')}}">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('adminassets/css/feathericon.min.css')}}">

		<link rel="stylesheet" href="{{asset('adminassets/plugins/morris/morris.css')}}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('adminassets/css/style.css') }}" >





    </head>
    <body>


		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
            <div class="header">

				<!-- Logo -->
                <div class="header-left">
                    <a href="{{url('/admin-dashboard')}}" class="logo">
						<img src="{{asset('adminassets/img/log.png')}}" alt="Logo">
					</a>
					<a href="admin-dashboard" class="logo logo-small">
						<img src="{{asset('adminassets/img/Logosm.png')}}" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->

				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>



				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->

				<!-- Header Right Menu -->
				<ul class="nav user-menu">


					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
                                <a id="navbarDropdown" class="dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                	<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="{{asset('images')}}/{{Auth::user()->image}}" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>{{ Auth::user()->name }} </h6>
									<p class="text-muted mb-0">{{Auth::user()->role->name}} </p>
								</div>
							</div>
                                	<a class="dropdown-item" href="{{url('/admin-profile')}}">My Profile</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

					<!-- /User Menu -->

				</ul>
				<!-- /Header Right Menu -->

            </div>
			<!-- /Header -->

			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li >
								<a href="{{url('/admin-dashboard')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li>
								<a href="{{ url('/appointment-list') }}"><i class="fe fe-layout"></i> <span>Appointments</span></a>
							</li>
							<li>
								<a href="{{ url('/speciality') }}"><i class="fe fe-users"></i> <span>Specialities</span></a>
							</li>
							<li>
								<a href="{{ url('/hospital') }}"><i class="fa fa-hospital-o" aria-hidden="true"></i></i><span>Hospitals</span></a>
							</li>
							<li>
								<a href="{{url('/doctor')}}"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
							</li>
							<li>
								<a href="{{url('/patientlist')}}"><i class="fe fe-user"></i> <span>Patients</span></a>
							</li>
							<li>
								<a href="{{url('/reviews')}}"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
							</li>
							<li>
								<a href="{{url('/transactions-list')}}"><i class="fe fe-activity"></i> <span>Transactions</span></a>
							</li>
							<!-- <li>
								<a href="settings"><i class="fe fe-vector"></i> <span>Settings</span></a>
							</li> -->
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{url('/invoice-report')}}">Invoice Reports</a></li>
								</ul>
							</li>
							<!-- <li class="menu-title">
								<span>Pages</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="blog.html"> Blog </a></li>
									<li><a href="blog-details.html"> Blog Details</a></li>
									<li><a href="add-blog.html"> Add Blog </a></li>
									<li><a href="edit-blog.html"> Edit Blog </a></li>
								</ul>
							</li> -->

						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->

 <main >
            @yield('content')
        </main>




			 </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{asset('adminassets/js/jquery-3.2.1.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{asset('adminassets/js/popper.min.js')}}"></script>
        <script src="{{asset('adminassets/js/bootstrap.min.js')}}"></script>

		<!-- Slimscroll JS -->
        <script src="{{asset('adminassets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

		<script src="{{asset('adminassets/plugins/raphael/raphael.min.js')}}"></script>
		<script src="{{asset('adminassets/plugins/morris/morris.min.js')}}"></script>
		<script src="{{asset('adminassets/js/chart.morris.js')}}"></script>

		<!-- Custom JS -->
		<script  src="{{asset('adminassets/js/script.js')}}"></script>

    </body>

</html>

