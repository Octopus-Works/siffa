<style>
    .nav-item a {
        letter-spacing: 1.2px !important;
        text-transform: uppercase !important;
        padding-top: 4px !important;
        padding-right: 0px !important;
        padding-left: 0px !important;
        padding-bottom: 15px !important;
        margin: 0px !important;
        font-size: 14px !important;
    }


    .nav-item .dropdown-item {
        letter-spacing: 1.1px !important;
        text-transform: uppercase !important;
        padding-left: 5px !important;
        font-size: 13px !important;
    }

    .navbar-dark .navbar-brand {
        color: #ffc107 !important;
    }

    .dropdown-menu {
        background-color: #242b39 !important;
    }

    .navbar .dropdown-menu a {
        color: #fff !important;
    }

    .dropdown .dropdown-menu .dropdown-item:hover {
        background-color: #3d5e9e !important;
    }

    .dropdown .dropdown-menu.dropdown-primary .dropdown-item:hover {
        background-color: #3d5e9e !important;
    }

    .padding-sides {
        padding-left: 0.3rem !important;
        padding-right: 0.9rem !important;
    }

    .waves-effect {
        cursor: pointer !important;
    }

    @media screen and (min-width: 768px) {

        .dropdown:hover .dropdown-menu,
        .btn-group:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            margin-top: 0;
        }

        .dropdown-toggle {
            margin-bottom: 2px;
        }

        .navbar .dropdown-toggle,
        .nav-tabs .dropdown-toggle {
            margin-bottom: 0;
        }
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 2px solid rgba(0, 0, 0, .1);

    }



    .dropdown .dropdown-menu.dropdown-default .dropdown-item.active,
    .dropdown .dropdown-menu.dropdown-default .dropdown-item:active,
    .dropdown .dropdown-menu.dropdown-default .dropdown-item:hover,
    .dropleft .dropdown-menu.dropdown-default .dropdown-item.active,
    .dropleft .dropdown-menu.dropdown-default .dropdown-item:active,
    .dropleft .dropdown-menu.dropdown-default .dropdown-item:hover,
    .dropright .dropdown-menu.dropdown-default .dropdown-item.active,
    .dropright .dropdown-menu.dropdown-default .dropdown-item:active,
    .dropright .dropdown-menu.dropdown-default .dropdown-item:hover,
    .dropup .dropdown-menu.dropdown-default .dropdown-item.active,
    .dropup .dropdown-menu.dropdown-default .dropdown-item:active,
    .dropup .dropdown-menu.dropdown-default .dropdown-item:hover {
        background-color: #3d5e9e !important;
        -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
        -webkit-border-radius: .125rem;
        border-radius: .125rem;
    }

    @media only screen and (max-width: 993px) {
        .navbar .dropdown-menu {
            position: static !important;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1260px;
        }
    }


    .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #ffc107;
        text-shadow: 0 1px 0 #ffc107;
        opacity: .5;
    }



    .modal-content {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: unset !important;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem;
        outline: 0;
    }

</style>

@if ( isset($offer) && $offer->visible)
<nav id="banner" class="alert navbar navbar-expand-lg custom-secondary d-flex justify-content-center fixed-top"
    role="alert">
    <form class="form-inline">
        <h6 class="font-weight-bold mt-2 mr-3 black-text">{{ $offer->text}}</h6>
        <a href="{{$offer->href}}" class="btn btn-sm align-middle animated pulse infinite custom-tertiary white-text"
            type="button">See
            Offer</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </form>
</nav>
@endif

<nav id="navbar" class="navbar navbar-expand-lg custom-primary-transparent navbar-dark scrolling-navbar fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img style="
				height: auto !important;
				width: 210px !important;
			" src="{{url('/img/Logos/logo_xs_1.png')}}" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item padding-sides">
                    <a class="nav-link" href={{route('home')}}>HOME</a>
                </li>
                <li class="nav-item dropdown padding-sides">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" href={{route('about')}}>About</a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href='{{route('about')}}/#mission'>Mission Statement</a>
                        <a class="dropdown-item" href={{route('laws')}}>By-Laws</a>
                        <a class="dropdown-item" href={{route('trading_conditions')}}>Standard Trading Conditions</a>
                    </div>
                </li>
                <li class="nav-item dropdown padding-sides">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Members</a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href={{route('members_list')}}>Member List</a>
                        @if (!Auth::check())
                        <a class="dropdown-item" href={{route('register')}}>Become a Member</a>
                        @endif
                    </div>
                </li>
                <li class="nav-item dropdown padding-sides">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">News & Events</a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href={{route('events')}}>Our Events</a>
                        <a class="dropdown-item" href={{route('calendar')}}>Calendar</a>
                    </div>
                </li>
                <li class="nav-item dropdown padding-sides">
                    <a class="nav-link" href={{route('latest')}}>Gallery</a>
                </li>
                <li class="nav-item dropdown padding-sides">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Board</a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href={{route('president_message')}}>President's Message</a>
                        <a class="dropdown-item" href={{route('board_members')}}>Board Members</a>
                    </div>
                </li>
                <li class="nav-item padding-sides">
                    <a class="nav-link" href={{route('contact')}}>Contact Us</a>
                </li>
                <li class="nav-item dropdown padding-sides">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Tools & Info</a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" data-toggle="modal" data-target="#modal_freight">Freight Volume
                            Calculator</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#modal_cbm">CBM</a>
                    </div>
                </li>
            </ul>
            {{-- <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link custom-secondary-text" href={{route('register')}}>Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-secondary-text" href={{route('login')}}>Login</a>
            </li>
            </ul> --}}
            <ul class="navbar-nav nav-flex-icons">

                @if (Auth::check())
                <li class="nav-item dropdown  padding-sides">
                    <a id="MY PROFILE" class="custom-secondary-text nav-link dropdown-toggle waves-effect  "
                        id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"> </i>{{ Auth::getUser()->userdetail->fullname}} </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-default trans-1-0"
                        aria-labelledby="navbarDropdownMenuLink-4">
                        <a id="MY ACCOUNT" class="dropdown-item waves-effect  custom-secondary-text"
                            href={{url("/redirect")}}>
                            MY ACCOUNT</a>
                        <a class="dropdown-item waves-effect  custom-secondary-text"
                            href="{{ url('/logout') }}">LOGOUT</a>
                    </div>

                </li>
                @else
                <li id="register" class="nav-item padding-sides">
                    <a id="SIGNUP"
                        class="left custom-secondary-text padding-sides nav-link waves-effect  white-text font-weight-bold"
                        href={{url("register")}}>

                        REGISTER</a>
                </li>
                <li class="nav-item padding-sides">
                    <a id="LOGIN"
                        class="custom-secondary-text padding-sides nav-link waves-effect  white-text font-weight-bold"
                        href={{url("login")}}>

                        LOGIN</a>
                </li>
                @endif
            </ul>


        </div>
    </div>
</nav>

<script type="text/javascript" src={{url("js/jquery-3.3.1.min.js")}}></script>

<script>
    $(document).ready(function () {
        if ($("#banner").hasClass("alert"))
            $("#navbar").css('margin-top', '69px');

    });

</script>

<script>
    $('#close').on('click', function () {
        $("#navbar").css('margin-top', '0px');
    });

</script>

<div class="modal fade mt-5" id="modal_freight" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">



    <div class="modal-dialog modal-lg " role="document" style="background-color: #1c2331">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold custom-secondary-text">Freight Volume Calculator</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



            <!--Body-->
            <div class="modal-body container text-center ">



            </div>



            <div class="modal-footer d-flex justify-content-center">
                <button type="" class="btn btn-rounded custom-secondary black-text" data-dismiss="modal">close
                </button>


            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade mt-5" id="modal_cbm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">



    <div class="modal-dialog modal-lg  custom-primary" role="document" style="background-color: #1c2331">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold custom-secondary-text">CBM</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



            <!--Body-->
            <div class="modal-body container text-center ">



            </div>



            <div class="modal-footer d-flex justify-content-center">
                <button type="" class="btn btn-rounded custom-secondary black-text" data-dismiss="modal">close
                </button>

            </div>
            </form>
        </div>
    </div>
</div>
