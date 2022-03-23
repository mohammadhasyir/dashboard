<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body>
            <div class="sidenav">
                <header>
                    <h3>Contract</h3> 
                    <span>Management System</span>
                </header>
                <a href="/" class="{{ Route::is('dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="/contract" class="{{ Route::is('contract') ? 'active' : ''}}">Contracts</a>
                <a href="/event" class="{{ Route::is('event') ? 'active' : ''}}">Events & Reminders</a>
                <a href="#contact">Complaints</a>
                <a href="#contact">Reporting</a>
            </div>

            <div class="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
                    <div class="container-fluid">
                        <strong class="navbar-brand">{{ (Route::is('dashboard') ? 'Dashboard' : (Route::is('contract') ? 'Contracts' : 'Events')) }}</strong>
                            <ul class="navbar-nav ms-auto d-flex flex-row">
                                <li class="nav-item">
                                    <button class="btn btn-success">+ CREATE</button>
                                </li>
                                <li class="nav-item ps-2 dropdown">
                                    <a class="nav-link me-3 me-lg-0" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-bell-fill" style="font-size:20px"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item ps-2">
                                    <p style="font-size:20px">Holistics Lab</p>
                                </li>
                                <li class="nav-item ps-2">
                                    <i class="bi bi-person-circle" style="font-size:20px"></i>
                                </li>
                            </ul>
                        
                    </div>
                </nav>

                <main>
                    <div class="container-fluid">
                    @yield('content')
                    </div> 
                </main>
            </div>
    </body>
</html>