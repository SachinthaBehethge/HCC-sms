<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    
   
     <!-- Styles -->
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
     <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


    <title>HCC-Student Management </title>
</head>
@yield('styles');
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
                        <li class="dropdown-item" href="#"><a  href="#">Profile</a></li>
                        <li><a href="#">Manage Courses</a></li>
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
                    <li class=""><a href="{{route('admin')}}"><i class="feather-16" data-feather="home"></i><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                   
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl2">
                            <span class="glyphicon glyphicon-ok"></span>Students <span class="caret"></span>
                        </a>
                        <div id="dropdown-lvl2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                   <li><a href="#">Students List</a></li>
                                   <li><a href="{{route('admin.student.create')}}">Add new student</a></li>
                                         
                                </ul>
                            </div>
                        </div>
                    </li>
                  
                    <li class="#"><a href="#"><i class="feather-16" data-feather="users"></i><span class="glyphicon glyphicon-user"></span> Teachers</a></li>
                    <li class="#"><a href="{{route('admin.sections.index')}}"><i class="feather-16" data-feather="sections"></i><span class="glyphicon glyphicon-th"></span> Sections</a></li>
                   

                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl1">
                            <span class="glyphicon glyphicon-list-alt"></span> Reports <span class="caret"></span>
                        </a>
                        <div id="dropdown-lvl1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    
                                </ul>
                            </div>
                        </div>
                    </li>



                </ul>
			</div>
		</nav>

	</div>
</div> 
</div>
@yield('content')


</div>
</div>
<footer class="w-100 py-4 bg-dark flex-shrink-0">
    <div class="container py-4 ">
        <div class="row ">
            
            <div class="col-lg-3 col-md-3">
                <h5 class="text-white mb-3 text-center">Quick links</h5>
                <ul class="list-unstyled text-muted text-center">
                    <li><a href="{{route('homepage')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6">
                <h5 class="text-white mb-3 text-center">Social Media</h5>
                <ul class="text-center">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-yahoo"></a>
                    

                </ul>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="text-center">
                    <img class="logo image-responsive" src="assets/img/logo/logo2.png" alt="">
                </div>
                <h5 class="text-white mb-3 text-center">Hewaheta Central College - Talatuoya</h5>

            </div>
            
        </div>
    </div>
</footer> 
<div class="footer__bottom">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="footer__copyright text-center">
                <p>© 2022 HCC-Student Management System, All Rights Reserved. 
                    <br> Design By <a href="#">Sachintha Behethge</a></p>
             </div>
          </div>
       </div>
    </div>
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