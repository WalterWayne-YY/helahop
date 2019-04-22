<meta name="viewport" content="width=device-width, initial-scale=1">
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
         </div>
     @endif
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
        <div id="app">
                {{-- <div class="container"> --}}
                  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                      
                          <a class="navbar-brand" href="{{ url('/') }}">
                              {{ config('app.name', 'Laravel') }}
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                              <span class="navbar-toggler-icon"></span>
                          </button>
          
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <!-- Left Side Of Navbar -->
                              <ul class="navbar-nav mr-auto">
          
                              </ul>
          
                              <!-- Right Side Of Navbar -->
                              <ul class="navbar-nav ml-auto">
                                  <!-- Authentication Links -->
                                  @guest
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                      </li>
                                      @if (Route::has('register'))
                                          <li class="nav-item">
                                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                          </li>
                                      @endif
                                  @else
                                      <li class="nav-item dropdown">
                                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                              {{ Auth::user()->name }} <span class="caret"></span>
                                          </a>
          
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                              <a class="dropdown-item" href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                                  {{ __('Logout') }}
                                              </a>
          
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  @csrf
                                              </form>
                                          </div>
                                      </li>
                                  @endguest
                              </ul>
                          </div>
                      
                  </nav>
                 <br>
                     {{-- Dashboard --}}
                    <div class="container-fluid">
                       <div class="row">
                           <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                              <div class="sidebar-sticky">
                                <ul class="nav flex-column">
                                 <li class="nav-item">
                             <a class="nav-link" href="/posts">
                         <span data-feather="users"></span>
                             Posts
                             </a>
                             </li>
                
                            <li class="nav-item">
                            <a class="nav-link" href="/courses">
                                <span data-feather="layers"></span>
                                Courses
                            </a>
                            </li>
                        </ul>
                        </div>
                    </nav>
  
                        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-1">
                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            </div>     

                            @include('layouts.messages')

                            <div class="container">
                                @yield('content')
                            </div>
                        </main>
        </div>
    </div>
        <!-- Icons -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
        feather.replace()
        </script>
              </div>
              
          </div>
          </body>
          </html>