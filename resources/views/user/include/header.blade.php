<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        @if (Route::has('login'))
                            @auth
                                <div class="btn-group" role="group" style="color: white;">
                                    <a class="btn btn-primary" style="color: white;margin-left: 10px;margin-right: 10px"
                                        href="{{ route('myquery') }}">My Appointment</a>

                                    @if (request()->user()->is_admin)
                                        <a class="btn btn-warning" style="color: white;margin-left: 10px;margin-right: 10px"
                                            href="{{ route('dashboard') }}">Admin Dashboard</a>
                                    @endif
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            style="color: white;margin-left: 10px;margin-right: 10px; background-color: #FF4943 !important;">Logout</button>
                                    </form>

                                </div>

                            @endauth
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><span class="text-primary">Health</span>-Care</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('alldoctors') }}">Doctors</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('myappointment') }}"
                                style="background-color: #00D9A5;color: white; border-radius: 10px;">Appointments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('foodpage') }}"
                                style="background-color: #00D9A5;color: white; margin-left: 7px; border-radius: 10px;">Food</a>
                        </li>
                        <x-app-layout>

                        </x-app-layout>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth


                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>
