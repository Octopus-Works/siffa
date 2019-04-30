<div id="slide-out" class="side-nav fixed custom-dark">
	<ul class="custom-scrollbar">
		<!-- Logo -->
		<li class="logo-sn waves-effect">
			<div class="text-center">
				<a href="#" class="text-center pl-0 navbar-brand amber-text">

					<strong>SIFFA</strong>
					{{-- <img width="157px" height="73px" src={{url('/logo_1_dark.png')}}> --}}
				</a>
			</div>
		</li>
		<hr>

	<!--/. Logo -->

	<!--Search Form-->
	{{--<li>--}}
	{{--<form class="search-form" role="search">--}}
	{{--<div class="form-group md-form mt-0 pt-1 waves-light">--}}
	{{--<input type="text" class="form-control" placeholder="Search">--}}
	{{--</div>--}}
	{{--</form>--}}
	{{--</li>--}}

	<!--/.Search Form-->
		<!-- Side navigation links -->
		<li>
			<ul class="collapsible collapsible-accordion">
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fas custom-yellow-text fa-th-list"></i>
						<i class="fas custom-yellow-text fa-angle-down rotate-icon"></i>Content Management</a>
					<div class="collapsible-body">
						<ul>
							{{--TODO --}}
							<li>
								<a href={{url("/cms/admins/service_points/")}} class="waves-effect">
									Service Points
								</a>
							</li>
							<li>
								<a href={{url("/cms/admins/activities/")}} class="waves-effect">
									Activities
								</a>
							</li>
							<li>
								<a href={{url("/cms/admins/stories/")}} class="waves-effect">
									Stories
								</a>
							</li>
							<li>
								<a href={{url("/cms/admins/news/")}} class="waves-effect">
									News
								</a>
							</li>
							{{--<li>--}}
								{{--<a href={{url("/cms/admins/publications")}} class="waves-effect">--}}
									{{--Reports & Publication--}}
								{{--</a>--}}
							{{--</li>--}}
							{{--<li>--}}
								{{--<a href={{url("/cms/admins/vacancies")}} class="waves-effect">--}}
									{{--Vacancies--}}
								{{--</a>--}}
							{{--</li>--}}
						</ul>
					</div>
				</li >
				<li ><a class="collapsible-header waves-effect arrow-r"><i class="fas custom-yellow-text fa-users"></i>
						<i class="fas custom-yellow-text fa-angle-down rotate-icon"></i>User Management</a>
					<div class="collapsible-body">
						<ul>
							<li>
								<a href={{url("/cms/admins/users/")}} class="waves-effect">
									Users
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fas custom-yellow-text fa-marker"></i>
						<i class="fas custom-yellow-text fa-angle-down rotate-icon"></i>Requests Management</a>
					<div class="collapsible-body">
						<ul>
							<li>
								<a href={{url("/cms/admins/cm_requests/")}} class="waves-effect">
									CM-Requests
								</a>
							</li>
						</ul>
					</div>
				</li>

			</ul>
		</li>
		<!--/. Side navigation links -->
	</ul>
	<div class="sidenav-bg mask-strong"></div>
</div>