<style>
	.side-nav .collapsible a{
		font-size:1rem!important;
		line-height: 2rem!important;
	}

	.side-nav{
		width:18rem!important;
	}

</style>

<div id="slide-out" class="side-nav fixed custom-primary">
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
			<ul class="">
				<li class="pt-2 pb-2"><a  class="waves-effect "><i class="fas custom-secondary-text fa-th-list mr-1" ></i>Applications</a>

				</li >
				<li class="pt-2 pb-2"><a class="collapsible-header waves-effect arrow-r"><i class="fas custom-secondary-text fa-clipboard"></i>
						<i class="fas custom-secondary-text fa-angle-down rotate-icon"></i>Application</a>
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
				<li class="pt-2 pb-2"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-envelope custom-secondary-text"></i>
						<i class="fas custom-secondary-text fa-angle-down rotate-icon"></i>Messages</a>
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