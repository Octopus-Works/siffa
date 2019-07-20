<style>
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

    .badge {
        vertical-align: text-top !important;
    }


    @media only screen and (min-width: 1441px) {
        .form-inline{
            margin-left:15rem;
        }
    }

</style>

@if ( isset($offer) && $offer->visibility)
    <nav class="navbar navbar-expand-lg custom-secondary d-flex justify-content-center fixed-top">
        <form class="form-inline">
            <h6 class="font-weight-bold mt-2 mr-3 black-text">{{ $offer->text}}</h6>
            <a href="{{$offer->href}}" class="btn btn-sm align-middle animated pulse infinite custom-tertiary white-text" type="button">See
                Offer</a>
        </form>
    </nav>
@endif

<nav class="navbar navbar-expand-lg scrolling-navbar custom-primary double-nav " style="margin-top:59px">
    <!-- SideNav slide-out button -->
    <div class="float-right">
        <a href="#" data-activates="slide-out" class="button-collapse "><i class="fas fa-bars"></i></a>
    </div>




    <ul class="navbar-nav ml-auto nav-flex-icons">
        <!-- Dropdown -->
        <li class="nav-item dropdown notifications-nav">
            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="badge red">{{ Auth::getUser()->role->name == 'user' ? $count1 : $count2}}</span> <i
                    class="fas fa-bell custom-secondary-text"></i>
                <span class="d-lg-inline-block d-md-inline-block">Notifications</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">

                @if ( !$count1 && !$count2)
                <a class="dropdown-item">
                    <i class="far mr-2" aria-hidden="true"></i>
                    <span>No Notifications</span>
                    <span class="float-right"><i class="far" aria-hidden="true"></i></span>
                </a>
                @endif

                @foreach($notifications as $notes)
                @if ( $notes->checked == 0 && $notes->type == "rms" && Auth::getUser()->role->name == "RMS")
                <a class="dropdown-item" href="{{ url('rms/application')}}/{{$notes->user->id}}">
                    <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                    <span>{{ $notes->body }}</span>
                    <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i>
                        {{$notes->created_at}}</span>
                </a>
                @elseif ( $notes->checked == 0 && $notes->type == "user" && Auth::getUser()->role->name == "user")
                <p> here </p>
                <a class="dropdown-item" href="{{ url('user/app_status')}}">
                    <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                    <span>{{ $notes->body }}</span>
                    <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i>
                        {{$notes->created_at}}</span>
                </a>

                @endif
                @endforeach

            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas custom-secondary-text fa-user"></i>
                @if (Auth::check())

                <span class="d-lg-inline-block d-md-inline-block">{{ Auth::getUser()->userdetail->fullname}}</span>
                @endif
            </a>
            {{--TODO --}}
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                <a class="dropdown-item" href="{{ route('logout') }}">
                    <i class="fas custom-secondary-text fa-sign-out-alt mr-2" aria-hidden="true"></i>
                    <span>Log out</span>
                </a>
            </div>
        </li>

    </ul>
    <!--/Navbar links-->
</nav>
