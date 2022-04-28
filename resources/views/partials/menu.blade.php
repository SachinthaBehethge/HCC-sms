<div class="sidebar">
 
    <nav class="sidebar-nav">

        <ul class="nav">

            <li class="nav-item">
                <a class="nav-link active" href="{{route('dashboard')}}">
                    <i class="fa-fw fas fa fa-dashboard nav-icon">

                    </i>
                   Dashboard
                </a>
                
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" >
                    <i class="fa-fw fas fa-users nav-icon">

                    </i>
                    
                   Students
                </a>
                <ul class="nav-dropdown-items">
                   
                        <li class="nav-item">
                            <a href="{{route('students')}}" class="nav-link">Student List</a> 
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link">Class notices</a> 
                        </li>
                   
                        <li class="nav-item">
                            <a href="#" class="nav-link">Add class notice</a> 
                        </li>
                        


                   
                       
                  
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link   nav-dropdown-toggle" >
                    <i class="fa-fw fas fa-analytics nav-icon">
                       
                    </i>
                    
                   Marks
                </a>
                <ul class="nav-dropdown-items">
                   
                        <li class="nav-item">
                            <a href="{{route('marks.index')}}" class="nav-link">Termtest-subjects</a> 
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link">Class notices</a> 
                        </li>
                   
                        <li class="nav-item">
                            <a href="#" class="nav-link">Add class notice</a> 
                        </li>
                        


                   
                       
                  
                </ul>
            </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link   nav-dropdown-toggle" >
                        
                    
                        <i class="fa fa-address-book nav-icon"></i>
                       Notices
                    </a>
                    <ul class="nav-dropdown-items">
                       
                            <li class="nav-item">
                                <a href="#" class="nav-link">School notices</a> 
                            </li>
                            <li class="nav-item">
                                <a href="{{route('notices.create')}}" class="nav-link">Add class notice</a> 
                            </li>
                            <li class="nav-item">
                               <a href="{{route('notices.index')}}" class="nav-link">Class notices</a> 
                            </li>
                       
                            
                           
                            
                            
  
                    </ul>
                </li>
                
               
        
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="fa-fw fas fa-user nav-icon">

                    </i>
                   Class Students
                </a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="fa-fw fas fa-user nav-icon">

                    </i>
                   Time Table
                </a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="fa-fw fas fa-user nav-icon">

                    </i>
                   School Notices
                </a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="fa-fw fas fa-user nav-icon">

                    </i>
                   class Notices
                </a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="fa-fw fas fa-user nav-icon">

                    </i>
                   class Time Table
                </a>
                
            </li>
       
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{-- {{ trans('global.logout') }} --}}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
