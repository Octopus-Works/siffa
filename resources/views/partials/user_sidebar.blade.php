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

                <li class="pt-2 pb-2"><a class="waves-effect " href={{url('/app_status')}}><i
                            class="fas custom-secondary-text fa-spinner mr-3"></i>App Status</a>
                </li>
                <li class="pt-2 pb-2"><a class=" waves-effect" href={{url('/application_info')}}><i
                            class="fas custom-secondary-text fa-clipboard mr-3"></i>My Application</a>
                </li>
                <li class="pt-2 pb-2"><a class=" waves-effect " href={{url('/messages')}}><i
                            class="fas fa-envelope custom-secondary-text mr-3"></i>Messages</a>
                </li>
                @if (Auth::check())

                <li class="pt-2 pb-2"><a class="waves-effect " href={{url('/user/company_info').'/'.Auth::getUser()->id}}><i
                            class="fas fa-truck custom-secondary-text mr-3"></i>Company Info</a>
                </li>
                @endif

                <li class="pt-2 pb-2"><a class="waves-effect " href={{url('/account_info')}}><i
                            class="fas fa-user custom-secondary-text mr-3"></i>Account Info</a>
                </li>
            </ul>
        </li>
        <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
