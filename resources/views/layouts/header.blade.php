<!DOCTYPE html>
<html lang="en">
    <head>
        @stack('title')
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" href="{{asset('assets/logo.png')}}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>

    <body>
        <div class=" header-container">
        <header class="header">
            <!-- place navbar here -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="navbarr container">
                  <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('assets/logo.png')}}" class="brand-logo" alt="StyleSphere">
                </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse navLinks nav_items " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/')}}">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/products')}}">PRODUCTS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/categories')}}">CATEGORIES</a>
                      </li>
                      {{-- <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/users')}}">Users</a>
                      </li> --}}
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/about')}}">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/cart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
                      </li>
                      <li class="nav-item dropdown">
                        @if(session()->has('user_id'))
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          {{session('name')}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="{{url('/user/view_profile')}}">View Profile</a></li>
                          <li><a class="dropdown-item" href="{{url('/user/edit_profile')}}">Edit Profile</a></li>
                          <li><a class="dropdown-item" href="{{url('/orders/summary')}}">Orders</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="{{url('/logout')}}">Logout</a></li>
                        </ul>
                        @else
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Guest
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="{{url('/login')}}">Log In</a></li>
                          <li><a class="dropdown-item" href="{{url('/register')}}">Register</a></li>
                        </ul>
                        @endif

                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>
        </div>