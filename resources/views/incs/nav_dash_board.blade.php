
<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav ">
	<!-- SideNav slide-out button -->
	<div class="float-left">
		<a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
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
				<i class="fas fa-user"></i>
				<span class="d-lg-inline-block d-md-inline-block">user name</span>
			</a>
			{{--TODO --}}
			<div class="dropdown-menu dropdown-primary " aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="{{url("/cms/admins/profile/")}}">
					<i class="fas fa-user-md mr-2" aria-hidden="true"></i>
					<span>My Account</span>
				</a>
				<a class="dropdown-item" href="{{ url('/logout') }}">
					<i class="fas fa-sign-out-alt mr-2" aria-hidden="true"></i>
					<span>Log out</span>
				</a>
			</div>
		</li>

	</ul>
	<!--/Navbar links-->
</nav>