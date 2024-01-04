<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin_panel')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">UI Elements</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin_panel/products')}}">
          <i class="fa-brands fa-product-hunt menu-icon"></i>
          <span class="menu-title">Products</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin_panel/categories')}}">
          <i class="fa-solid fa-list menu-icon"></i>
          <span class="menu-title">Categories</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin_panel/users')}}">
          <i class="fa-solid fa-users menu-icon"></i>
          <span class="menu-title">Users</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin_panel/orders')}}">
          <i class="mdi mdi-tshirt-crew menu-icon"></i>
          <span class="menu-title">Orders</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin_panel/carts')}}">
          <i class="fa-solid fa-cart-shopping menu-icon"></i>
          <span class="menu-title">Carts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin_panel/addresses')}}">
          <i class="fa-solid fa-address-card menu-icon"></i>
          <span class="menu-title">Addresses</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>