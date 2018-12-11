<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand text-white" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link" href="#"><i class="fa fa-home"></i> Home</a> </li>
            </ul>
            @if(!auth()->check())
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registerForm') }}"><i class="fa fa-user-plus"></i> Sign Up</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('loginForm') }}"> <i class="fa fa-sign-in"></i> Sign In</a> </li>
                </ul>
            @else
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i> {{ auth()->user()->name }}</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                <a class="dropdown-item" href="#"><i class="fa fa-user"></i>Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-sign-out"></i>Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</nav>