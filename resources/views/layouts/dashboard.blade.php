<!doctype html>
<html lang="en">
    
<!-- Mirrored from bhulua.thememinister.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2024 18:06:54 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
        <meta name="author" content="Bdtask">
		  <title>Ifnets | Admin</title>
		  <link rel="icon" href="{{asset('app-asset/images/fav.png')}}" type="image/png" sizes="16x16">	  
        <!--Global Styles(used by all pages)-->
        <link href="{{asset('dash-assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('dash-assets/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
        <link href="{{asset('dash-assets/plugins/fontawesome/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('dash-assets/plugins/typicons/src/typicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('dash-assets/plugins/themify-icons/themify-icons.min.css')}}" rel="stylesheet">
        <!--Third party Styles(used by this page)--> 
        <link href="{{asset('dash-assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
        <!--Start Your Custom Style Now-->
        <link href="{{asset('dash-assets/dist/css/style.css')}}" rel="stylesheet">
    </head>
    <body class="fixed">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav class="sidebar sidebar-bunker">
                <div class="sidebar-header">
                    <!--<a href="index.html" class="logo"><span>bd</span>task</a>-->
                    <a href="{{url('/')}}" class="logo"><img src="{{asset('app-asset/images/logo.png')}}" alt=""></a>
                </div><!--/.sidebar header-->
                <div class="profile-element d-flex align-items-center flex-shrink-0">
                    <div class="avatar online">
                        <img src="{{asset('dash-assets/dist/img/avatar-1.jpg')}}" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-text">
                        <h6 class="m-0">{{auth()->user()->first_name ?? ''}} {{auth()->user()->last_name ?? ''}}</h6>
                        <span>{{auth()->user()->email ?? ''}}</span>
                    </div>
                </div><!--/.profile element-->
                <form class="search sidebar-form" action="#" method="get" >
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search...">
                        <i class="typcn typcn-zoom-outline search__helper" data-sa-action="search-close"></i>
                    </div>
                </form><!--/.search-->
                <div class="sidebar-body">
                   @include('layouts.navbar')
                </div><!-- sidebar-body -->
            </nav>
            <!-- Page Content  -->
            <div class="content-wrapper">
					<div class="main-content">
						<nav class="navbar-custom-menu navbar navbar-expand-lg m-0">
							 <div class="sidebar-toggle-icon" id="sidebarCollapse">
								  sidebar toggle<span></span>
							 </div><!--/.sidebar toggle icon-->
							 <div class="d-flex flex-grow-1">
								  <ul class="navbar-nav flex-row align-items-center ml-auto">
										<li class="nav-item dropdown quick-actions">
											 <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
												  <i class="typcn typcn-th-large-outline"></i>
											 </a>
											 <div class="dropdown-menu dropdown-menu-right" >
												  <div class="nav-grid-row row">
														<a href="#" class="icon-menu-item col-4">
															 <i class="typcn typcn-cog-outline d-block"></i>
															 <span>Settings</span>
														</a>
														<a href="#" class="icon-menu-item col-4">
															 <i class="typcn typcn-group-outline d-block"></i>
															 <span>Users</span>
														</a>
														<a href="#" class="icon-menu-item col-4">
															 <i class="typcn typcn-puzzle-outline d-block"></i>
															 <span>Components</span>
														</a>
														<a href="#" class="icon-menu-item col-4">
															 <i class="typcn typcn-chart-bar-outline d-block"></i>
															 <span>Profits</span>
														</a>
														<a href="#" class="icon-menu-item col-4">
															 <i class="typcn typcn-time d-block"></i>
															 <span>New Event</span>
														</a>
														<a href="#" class="icon-menu-item col-4">
															 <i class="typcn typcn-edit d-block"></i>
															 <span>Tasks</span>
														</a>
												  </div>
											 </div>
										</li><!--/.dropdown-->
										<li class="nav-item">
											 <a class="nav-link" href="chat.html"><i class="typcn typcn-messages"></i></a>
										</li>
										<li class="nav-item dropdown notification">
											 <a class="nav-link dropdown-toggle badge-dot" href="#" data-toggle="dropdown">
												  <i class="typcn typcn-bell"></i>
											 </a>
											 <div class="dropdown-menu dropdown-menu-right">
												  <h6 class="notification-title">Notifications</h6>
												  <p class="notification-text">You have 2 unread notification</p>
												  <div class="notification-list">
														<div class="media new">
															 <div class="img-user"><img src="assets/dist/img/avatar.png" alt=""></div>
															 <div class="media-body">
																  <h6>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</h6>
																  <span>Mar 15 12:32pm</span>
															 </div>
														</div><!--/.media -->
														<div class="media new">
															 <div class="img-user online"><img src="assets/dist/img/avatar2.png" alt=""></div>
															 <div class="media-body">
																  <h6><strong>Joyce Chua</strong> just created a new blog post</h6>
																  <span>Mar 13 04:16am</span>
															 </div>
														</div><!--/.media -->
														<div class="media">
															 <div class="img-user"><img src="assets/dist/img/avatar3.png" alt=""></div>
															 <div class="media-body">
																  <h6><strong>Althea Cabardo</strong> just created a new blog post</h6>
																  <span>Mar 13 02:56am</span>
															 </div>
														</div><!--/.media -->
														<div class="media">
															 <div class="img-user"><img src="assets/dist/img/avatar4.png" alt=""></div>
															 <div class="media-body">
																  <h6><strong>Adrian Monino</strong> added new comment on your photo</h6>
																  <span>Mar 12 10:40pm</span>
															 </div>
														</div><!--/.media -->
												  </div><!--/.notification -->
												  <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
											 </div><!--/.dropdown-menu -->
										</li><!--/.dropdown-->
										<li class="nav-item dropdown user-menu">
											 <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
												  <!--<img src="assets/dist/img/user2-160x160.png" alt="">-->
												  <i class="typcn typcn-user-add-outline"></i>
											 </a>
											 <div class="dropdown-menu dropdown-menu-right" >
												  <div class="dropdown-header d-sm-none">
														<a href="#" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
												  </div>
												  <div class="user-header">
														<div class="img-user">
															 <img src="{{asset('dash-assets/dist/img/avatar-1.jpg')}}" alt="">
														</div><!-- img-user -->
														<h6>{{auth()->user()->first_name ?? ''}} {{auth()->user()->last_name ?? ''}}</h6>
														<span>{{auth()->user()->email ?? ''}}</span>
												  </div><!-- user-header -->
												  <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
												  <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
												  <a href="#" class="dropdown-item"><i class="typcn typcn-arrow-shuffle"></i> Activity Logs</a>
												  <a href="#" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
												  <a class="dropdown-item" href="{{ route('logout') }}"
													onclick="event.preventDefault();
																		document.getElementById('logout-form').submit();">
														<i class="typcn typcn-key-outline"></i> Sign Out
												</a>
		
		
											  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
											  </form>
												  {{-- <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-key-outline"></i> Sign Out</a> --}}
											 </div><!--/.dropdown-menu -->
										</li>
								  </ul><!--/.navbar nav-->
								  <div class="nav-clock">
										<div class="time">
											 <span class="time-hours"></span>
											 <span class="time-min"></span>
											 <span class="time-sec"></span>
										</div>
								  </div><!-- nav-clock -->
							 </div>
						</nav><!--/.navbar-->
						@yield('content')
					</div><!--/.main content-->
                <footer class="footer-content">
                    <div class="footer-text d-flex align-items-center justify-content-between">
                        <div class="copy">© 2018 Ifnets | Social Media Network</div>
                        <div class="credit">Designed by: <a href="{{url('/')}}"> Ifnets </a></div>
                    </div>
                </footer><!--/.footer content-->
                <div class="overlay"></div>
            </div><!--/.wrapper-->
        </div>
        <!--Global script(used by all pages)-->
        <script src="{{asset('dash-assets/plugins/jQuery/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('dash-assets/dist/js/popper.min.js')}}"></script>
        <script src="{{asset('dash-assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('dash-assets/plugins/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('dash-assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
        <!-- Third Party Scripts(used by this page)-->
        <script src="{{asset('dash-assets/plugins/chartJs/Chart.min.js')}}"></script>
        <script src="{{asset('dash-assets/plugins/sparkline/sparkline.min.js')}}"></script>
        <script src="{{asset('dash-assets/plugins/datatables/dataTables.min.js')}}"></script>
        <script src="{{asset('dash-assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="{{asset('dash-assets/dist/js/pages/dashboard.js')}}"></script>
        <!--Page Scripts(used by all page)-->
        <script src="{{asset('dash-assets/dist/js/sidebar.js')}}"></script>
		  @yield('scripts')
    </body>

<!-- Mirrored from bhulua.thememinister.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2024 18:08:22 GMT -->
</html>