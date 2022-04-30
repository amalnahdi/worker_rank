<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body   >
    @if( Route::current()->uri()== 'login' ||Route::current()->uri()== 'register' )
    <div id="app" class="homepage h-100 ">

    @else
    <div id="app min-h-100">
    @endif
        <ul class="nav justify-content-end bg-dark">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home')}}">create cv</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contact Us" > Contact Us </a>
            </li>
            @guest
            <li class="nav-item">
                <a class="nav-link " href="{{ route('home')}}"  >login </a>
              </li>
            @else
            <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
              </li>
            @endguest
          </ul>

@yield('child')

</div>
</body>
</html>