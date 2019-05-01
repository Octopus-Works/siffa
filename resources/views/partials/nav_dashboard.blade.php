<style>
    .dropdown-menu{
		background-color: #1c2331f5 !important;
    }
	.navbar .dropdown-menu a{
		color:#fff!important;
	}
	.dropdown .dropdown-menu .dropdown-item:hover{
		background-color: #3d5e9e!important;
	}
</style>

<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar custom-primary double-nav ">
    <!-- SideNav slide-out button -->
    <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse "><i class="fas fa-bars"></i></a>
    </div>

    <!-- Breadcrumb-->
    <div class="breadcrumb-dn mt-2 ml-2">
        {{-- <p>{{$resource_path}}</p> --}}
    </div>

    <!--Navbar links-->
    <ul class="nav navbar-nav nav-flex-icons ml-auto mr-2 ">
        <!-- Dropdown -->
        <li class="nav-item dropdown ml-5">
            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas custom-secondary-text fa-user"></i>
                <span class="d-lg-inline-block d-md-inline-block">Username</span>
            </a>
            {{--TODO --}}
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{url("/cms/admins/profile/")}}">
                    <i class="fas custom-secondary-text fa-user-md mr-2" aria-hidden="true"></i>
                    <span>My Account</span>
                </a>
                <a class="dropdown-item" href="{{ url('/logout') }}">
                    <i class="fas custom-secondary-text fa-sign-out-alt mr-2" aria-hidden="true"></i>
                    <span>Log out</span>
                </a>
            </div>
        </li>

    </ul>
    <!--/Navbar links-->
</nav>
