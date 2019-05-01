<style>
    .dropdown-menu{
		background-color: #242b39 !important;
    }
	.navbar .dropdown-menu a{
		color:#fff!important;
	}
	.dropdown .dropdown-menu .dropdown-item:hover{
		background-color: #3d5e9e!important;
    }
    .dropdown .dropdown-menu.dropdown-primary .dropdown-item:hover{
        background-color: #3d5e9e!important;
    }
    .badge{
        vertical-align: text-top!important;
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
        <li class="nav-item dropdown notifications-nav">
            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="badge red">3</span> <i class="fas fa-bell custom-secondary-text"></i>
              <span class="d-none d-md-inline-block">Notifications</span>
            </a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">
                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                <span>New order received</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                <span>New order received</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                <span>Your campaign is about to end</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
              </a>
            </div>
          </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas custom-secondary-text fa-user"></i>
                <span class="d-lg-inline-block d-md-inline-block">Username</span>
            </a>
            {{--TODO --}}
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{url("/cms/admins/profile/")}}">
                    <i class="fas custom-secondary-text fa-user mr-2" aria-hidden="true"></i>
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
