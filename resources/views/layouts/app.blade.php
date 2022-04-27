<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HCC-Student Management</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    {{-- icons --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/loader.css')}}">

</head>


<body>
   
    @php
      $loggedUser = Auth::user();
    @endphp
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">
                    HCC-Student Management
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link"  href="/">Home</a>

                        </li>
                        
                        @auth

                        @if ($loggedUser->role_id == 1)
                        <li class="nav-item">
                            <a href="{{route('admin')}}" class="nav-link">Admin Dashboard</a>
                        </li>
                       

                        @elseif ($loggedUser->role_id == 3 )
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('studentdashboard.index')}}">
                                My Dashboard
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{route('profile')}}" class="nav-link">My profile</a>
                        </li>
                           

                      
                            @if ($teacher->is_classteacher==0 ) 
                            <li class="nav-item">
                                <a href="{{route('dashboard')}}" class="nav-link">Class Dashboard</a>
                            </li>
                            @endif
                        
                        @endif
                        @endauth
                        
                    

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('login')}}">{{ __('Login') }}</a>
                                </li>
                          

                            
                              
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>
         
        <footer class="w-100 py-4 bg-dark flex-shrink-0">
            <div class="container py-4 ">
                <div class="row ">
                    
                    <div class="col-lg-3 col-md-3">
                        <h5 class="text-white mb-3 text-center">Quick links</h5>
                        <ul class="list-unstyled text-muted text-center">
                            <li><a href="{{route('homepage')}}">Home</a></li>
                        
                            <li><a href="tel:+94812404203">contact</a></li>
                            <li><a href="#">School Website</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <h5 class="text-white mb-3 text-center">Social Media</h5>
                        <ul class="text-center">
                            <a href="https://m.facebook.com/174165172640472/" class="fa fa-facebook"></a>
                            <a href="https://mobile.twitter.com/HewahetaCC" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-google"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                            <a href="#" class="fa fa-yahoo"></a>
                            

                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5 class="text-white mb-3 text-center">Hewaheta Central College - Talatuoya</h5>
                        <div class="text-center">
                            <img class="logo image-responsive" src="assets/img/logo/logo.png" alt="">
                        </div>
                        
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
      </div>
    </div>

    <script>
        $(window).load(function(){
            $(#loading).fadeOut("slow");
        });
    </script>
</body>

</html>
