<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="{{ asset('js/bootstrap.js') }}" defer></script>
 
 
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
     <!-- Styles -->

    <title>HCC-Student Management </title>
</head>
<body>
      
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
            <a class="navbar-brand" href="{{route('homepage')}}">Hewaheta Central College</a>

		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
			<form class="navbar-form navbar-left" method="GET" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				
				<li class="dropdown-submenu">
                    <a href="{{route('admin')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">{{Auth::user()->name}}</span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item" href="{{route('homepage')}}"><a  href="{{route('homepage')}}">Web Site</a></li>
                        <li class="dropdown-item" href="{{route('profile')}}"><a  href="{{route('profile')}}">Profile</a></li>
                        <li><a href="{{route('admin.courses.index')}}">Manage Courses</a></li>
                        <li>
                            <form id="logoutform" action="{{ route('logout') }}" method="POST">
                            <button>logout</button>
                            {{ csrf_field() }}
                        </form>
                    </li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>  	<div class="container-fluid main-container">
  		<div class="col-md-2 sidebar">
  			<div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">
                    <li class="{{ (request()->is('/admin')) ? 'active' : '' }}"><a href="{{url('/admin')}}"><i class="feather-16" data-feather="home"></i><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                    @if (Auth::user()->role_id==1)
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl2">
                            <span class="glyphicon glyphicon-ok"></span>Student Approval <span class="caret"></span>
                        </a>
                        <div id="dropdown-lvl2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li class="{{ (request()->is('admin/approvals*')) ? 'active' : '' }}"><a href="{{url('/admin/approval')}}"><i class="feather-16" data-feather="users"></i>  Course Join Requests</a></li>
                                    <li class="{{ (request()->is('admin/approvals*')) ? 'active' : '' }}"><a href="{{url('/admin/approved')}}"><i class="feather-16" data-feather="user-plus"></i> Approved Students</a></li>
                                    <li class="{{ (request()->is('admin/approvals*')) ? 'active' : '' }}"><a href="{{url('/admin/rejected')}}"><i class="feather-16" data-feather="user-x"></i> Rejected Students</a></li>        
                                </ul>
                            </div>
                        </div>
                    </li>
                  
                    <li class="{{ (request()->is('admin/teachers*')) ? 'active' : '' }}"><a href="{{url('/admin/teachers')}}"><i class="feather-16" data-feather="users"></i><span class="glyphicon glyphicon-user"></span> Teachers</a></li>
                    <li class="{{ (request()->is('admin/subjects*')) ? 'active' : '' }}"><a href="{{url('/admin/subjects')}}"><i class="feather-16" data-feather="archive"></i><span class="glyphicon glyphicon-book"></span> Subjects</a></li>
                    <li class="{{ (request()->is('admin/grades*')) ? 'active' : '' }}"><a href="{{url('/admin/grades')}}"><i class="feather-16" data-feather="layers"></i><span class="glyphicon glyphicon-th"></span> Grades</a></li>
                    <li class="{{ (request()->is('admin/media*')) ? 'active' : '' }}"><a href="{{url('/admin/media')}}"><i class="feather-16" data-feather="layers"></i><span class="glyphicon glyphicon-th-list"></span> Media</a></li>
                    @endif
                    <li class="{{ (request()->is('admin/courses*')) ? 'active' : '' }}"><a href="{{url('/admin/courses')}}"><i class="feather-16" data-feather="book"></i><span class="glyphicon glyphicon-pencil"></span> Courses</a></li>
                    
                    @if (Auth::user()->role_id==1)
                    <li class="{{ (request()->is('admin/zoom_sessions*')) ? 'active' : '' }}"><a href="{{url('/admin/zoom_sessions')}}"><i class="feather-16" data-feather="video"></i><span class="glyphicon glyphicon-facetime-video"></span> Zoom Sessions</a></li>
                    <li class="{{ (request()->is('admin/bank_details*')) ? 'active' : '' }}"><a href="{{url('/admin/bank_details')}}"><i class="feather-16" data-feather="dollar-sign"></i><span class="glyphicon glyphicon-credit-card"></span> Bank Details</a></li>
                    <li class="{{ (request()->is('admin/site_settings*')) ? 'active' : '' }}"><a href="{{url('/admin/site_settings/edit')}}"><i class="feather-16" data-feather="settings"></i><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                   
                    @endif

                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl1">
                            <span class="glyphicon glyphicon-list-alt"></span> Reports <span class="caret"></span>
                        </a>
                        <div id="dropdown-lvl1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li class="{{ (request()->is('admin/reports*')) ? 'active' : '' }}"><a href="{{url('/admin/reports/students/')}}"><i class="feather-16" data-feather="users"></i>Students</a></li>
                                    <li class="{{ (request()->is('admin/reports*')) ? 'active' : '' }}"><a href="{{url('/admin/reports/payments/')}}"><i class="feather-16" data-feather="dollar-sign"></i>Payments</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>



                </ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div> 
</div>
@yield('content')
<footer class="pull-left footer">
    <p class="col-md-12">
        <hr class="divider">
        Copyright &COPY; 2021 <a href=""> </a>
    </p>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(function () {
  $('.navbar-toggle-sidebar').click(function () {
      $('.navbar-nav').toggleClass('slide-in');
      $('.side-body').toggleClass('body-slide-in');
      $('#search').removeClass('in').addClass('collapse').slideUp(200);
  });

  $('#search-trigger').click(function () {
      $('.navbar-nav').removeClass('slide-in');
      $('.side-body').removeClass('body-slide-in');
      $('.search-input').focus();
  });
});
</script>
@yield('scripts')
</body>
</html>

</body>
</html>