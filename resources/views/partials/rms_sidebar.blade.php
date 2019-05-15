<style>
    .side-nav .collapsible a {
        font-size: 1rem !important;
        line-height: 2rem !important;
    }

    .side-nav {
        width: 18rem !important;
    }

    a {
        color: #fff !important;
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

                <li class="pt-2 pb-2"><a class=" waves-effect" href={{url('/rms/view_applications')}}><i
                            class="fas custom-secondary-text fa-clipboard mr-3"></i>Applications</a>
                </li>
                <li class="pt-2 pb-2"><a class="waves-effect " href={{url('/rms/user_management')}}><i
                            class="fas fa-users custom-secondary-text mr-3"></i>User Management</a>
                </li>
                <li class="pt-2 pb-2"><a class=" waves-effect " href={{url('/rms/view_messages')}}><i
                            class="fas fa-envelope custom-secondary-text mr-3"></i>Messages</a>
                </li>
                <li class="pt-2 pb-2"><a class="waves-effect " href={{url('/rms/account_info')}}><i
                            class="fas custom-secondary-text fa-user mr-3"></i>Account Information</a>
                </li>

            </ul>
        </li>
        <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
