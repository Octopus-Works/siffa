<style>
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

    .waves-effect{
        cursor: pointer!important;
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
    border-top: 2px solid rgba(0,0,0,.1);

}

</style>

<nav class="navbar fixed-top navbar-expand-lg custom-primary-transparent navbar-dark scrolling-navbar p-4">
    <div class="container">
        <a class="navbar-brand" href="#"><strong>SIFFA</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item padding-sides">
                    <a class="nav-link" href={{route('home')}}>Home</a>
                </li>
                <li class="nav-item dropdown padding-sides">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"  href={{route('about')}}>About Us</a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href='{{route('about')}}/#mission'>Mission Statement</a>
                        <a class="dropdown-item" href={{route('laws')}}>By-Laws</a>
                        <a class="dropdown-item" href={{route('trading_conditions')}}>Standard Trading Conditions</a>
                    </div>
                </li>
                <li class="nav-item dropdown padding-sides">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink">Members</a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href={{route('members_list')}}>Member List</a>
                        <a class="dropdown-item" href={{route('register')}}>Become a Member</a>
                    </div>
                </li>
                <li class="nav-item dropdown padding-sides">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" >News & Events</a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href={{route('events')}}>Our Events</a>
                        <a class="dropdown-item" href={{route('calendar')}}>Calendar</a>
                    </div>
                </li>
                <li class="nav-item dropdown padding-sides">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink">Gallery</a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href={{route('latest')}}>Latest</a>
                        <a class="dropdown-item" href={{route('archive')}}>Archive</a>
                    </div>
                </li>
                <li class="nav-item dropdown padding-sides">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink">Board of Directors</a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href={{route('president_message')}}>President's Message</a>
                        <a class="dropdown-item" href={{route('board_members')}}>Board Members</a>
                    </div>
                </li>
                <li class="nav-item padding-sides">
                    <a class="nav-link" href={{route('contact')}}>Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link custom-secondary-text" href={{route('register')}}>Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-secondary-text"href={{route('login')}}>Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

