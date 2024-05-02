<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
        integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/app.js','resources/sass/app.scss'])
</head>

<body>
    <div id="app">

        <div class="container-fluid vh-100">
            <div class="row h-100">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar ">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link text-white" href="https://www.delviale.it/">
                                    <i class="fa-solid fa-home-alt fa-lg fa-fw"></i> Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' }}"
                                    href="{{ route('admin.dashboard') }}">
                                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> il mio profilo
                                </a>
                            </li>

                
                            @if (($cliente->role_id)==1)
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' }}"
                                    href="{{ route('admin.sms.store') }}">
                                    <i class="fa-regular fa-message fa-lg fa-fw"></i> tutti i messaggi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' }}"
                                    href="{{ route('admin.clienti') }}">
                                    <i class="fa-solid fa-users"></i> tutti i clienti
                                </a>
                            </li>
                            
                            @else
                                <li class="nav-item">
                                    <a class="nav-link text-white"href="{{ route('admin.sms.create') }}">
                                    <i class="fa-regular fa-message fa-lg fa-fw"></i> Scrivi un messaggio
                                    </a>
                                </li>
                            @endif
                            


                            
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-sign-out-alt fa-lg fa-fw"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>

                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>

    </div>
    <style>
        main{
                    font-family: "Plus Jakarta Sans", sans-serif;
                        background-color: #929292;
                        background: rgb(178,254,222);
                        background: linear-gradient(58deg, rgba(178,254,222,1) 0%, rgba(220,234,255,0.9878545168067226) 38%, rgba(240,247,255,1) 53%, rgba(255,247,234,1) 67%, rgba(255,238,209,1) 78%);
        
                }    
    </style>
</body>

</html>
