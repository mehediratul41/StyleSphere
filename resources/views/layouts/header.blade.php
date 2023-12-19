<!doctype html>
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
        <link rel="icon" type="image/x-icon" href="https://cdn.dribbble.com/users/10665462/screenshots/19180199/media/3b016bed6a9bf02d810bff6555abd6dc.png">
    </head>

    <body>
        <div class="container">
        <header>
            <!-- place navbar here -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{url('/home')}}">
                    <img src="https://img.freepik.com/free-vector/hand-drawn-clothing-store-logo-design_23-2149577874.jpg?w=1380&t=st=1702983489~exp=1702984089~hmac=5fdf25a5ce6e48b1349fedc834e635537a398d1755ae3cd98ad00931c800b4bc" class="w-50 h-50" alt="StyleSphere">
                </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/home')}}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/products')}}">Products</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/categories')}}">Categories</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/users')}}">Users</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/about')}}">About</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Orders</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
        </header>
        </div>