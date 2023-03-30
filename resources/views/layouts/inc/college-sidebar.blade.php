<nav class="sidebar sidebar-offcanvas" id="sidebar">
<div class="card" style="margin-top:-5px; margin-left:-11px; background-color:transparent; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px; border:none;">
        <img style="width: 100%; margin-top:-16%; margin-left:-2%; margin-bottom:-17%;"
            src="{{asset('assets/images/CMS_ALL_NEW_BLACK.gif')}}" alt="logo" />
        <!-- <span 
            style="text-align:center; margin-bottom:3%; color:#7A7A7A; font-size:16px;">College
            Monitoring System</span> -->
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{url('college/dashboard')}}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('college/general_info_form')}}">
                <i class="fa fa-info-circle menu-icon"></i>
                <span class="menu-title">General info</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-info-circle menu-icon"></i>
                <span class="menu-title">Physical
                            Facilities</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-info-circle menu-icon"></i>
                <span class="menu-title">Student info </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-info-circle menu-icon"></i>
                <span class="menu-title">Teacher & Staff
                            info</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-info-circle menu-icon"></i>
                <span class="menu-title">Miscellaneous
                            Affairs</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-info-circle menu-icon"></i>
                <span class="menu-title">Teacher List</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-info-circle menu-icon"></i>
                <span class="menu-title">Affiliation Info
                            Statement</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="ti-file menu-icon"></i>
                <span class="menu-title">Fill-up Forms</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#"> General info
                        </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{url('college/physical_facilities_form')}}">Physical
                            Facilities</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Students info </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Teacher & Staff
                            info </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Miscellaneous
                            Affairs </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Teacher List </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Affiliation Info
                            Statement </a></li>
                </ul>
            </div>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('college/form_list')}}">
                <i class="far fa-eye menu-icon"></i>
                <span class="menu-title">View Forms</span>
               
            </a>
        </li>
        @guest
        <li class="nav-item">

            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="ti-power-off menu-icon fw-bold" style="color:red;"></i>  
                <span class="menu-title">{{ __('Logout') }}
                </span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf

        </li>
        @endguest
        
    </ul>
</nav>
