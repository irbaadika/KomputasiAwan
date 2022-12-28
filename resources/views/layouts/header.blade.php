@if (session()->has('gagal'))
<div class="alert alert-warning d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    {{ session('gagal') }}
  </div>
</div>
@endif

<header class="primary-header container flex">
  <div class="header-inner-one flex">
    <div class="logo">
      <img src="{{ asset('image/logo.png') }}" alt="" />
    </div>
    <button
      class="mobile-close-btn"
      data-visible="false"
      aria-controls="primary-navigation"
    >
      <i class="uil uil-times-circle"></i>
    </button>
    <nav>
      <ul id="primary-navigation" data-visible="false" class="primary-navigation flex" >
        <li>
          <a class="{{ Request::is('/') ? 'active' : '' }}  fs-100 fs-montserrat bold-500" href="/"
            >Home</a>
        </li>
        <li>
          <a class="{{ Request::is('shop') ? 'active' : '' }}  fs-100 fs-montserrat bold-500" href="/shop"
            >Shop</a>
        </li>
        <li>
          <a class="{{ Request::is('about') ? 'active' : '' }} fs-100 fs-montserrat bold-500" href="/about"
            >About Us</a>
        </li>
        
      </ul>
    </nav>
  </div>

  <div class="header-login flex">
    <nav>
      <ul id="primary-navigation" data-visible="false" class="primary-navigation flex" >
        
        <li>
          <img src="{{ asset('image/search.png') }}" alt="search">
        </li>
        @auth
        @if (auth()->user()->role == 'buyer')
        <li>
          <a class="fs-100 fs-montserrat bold-500" href="/cart"
            ><img src="{{ asset('image/cart.png') }}" alt="cart"></a>
        </li>
        <li class="nav-item dropdown fs-100 fs-montserrat bold-500">            
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Be a Seller
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">  
            <li><a class="dropdown-item" href=/seller><i class="bi bi-clipboard-minus me-2"></i>Register Now</a></li>
          </ul>
        </li>
        @endif

        <li class="nav-item dropdown fs-100 fs-montserrat bold-500">            
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->username }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @if(auth()->user()->role == 'admin')
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-clipboard-minus me-2"></i> My Dashboard</a></li>
            @elseif (auth()->user()->role == 'seller')
            <li><a class="dropdown-item" href="/dashboardSeller"><i class="bi bi-clipboard-minus me-2"></i> My Dashboard</a></li>
            @else
            <li><a class="dropdown-item" href="/profile/{{ auth()->user()->id }}"><i class="bi bi-person-circle me-2"></i> My Profile</a></li>
            <li><a class="dropdown-item" href="/transaksi"><i class="bi bi-menu-button-wide me-2"></i> My Transaction</a></li>
            @endif
            <li><hr class="dropdown-divider"></li>
            <li>
                <form action="/logout" action="get">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left me-2"></i> Logout</button>
                </form>
            </li>
          </ul>
        </li>
        @else
        <li>
          <a class="fs-100 fs-montserrat bold-500" href="/login"
            >Login</a>
        </li>
        @endauth
        {{-- <li>
          <i id="cart-box" aria-controls="cart-icon" class="uil uil-shopping-bag" ></i>
          <!-- =================1111111111================== -->
          <div id="cart-icon" data-visible="false" class="cart-icon">
            <div class="shopping flex">
              <p>Shopping Basket</p>
              <i id="cross-btn" class="uil uil-times"></i>
            </div>
            <div class="cart bold-800 flex">
              <i class="uil uil-shopping-cart-alt"></i>
              <p>Cart Is Empty</p>

              <!-- ================================================== -->

              <!-- ================================================== -->
          </div>
        </li> --}}
      </ul>
    </nav>
    {{-- <a href="/login">
    <p class="fs-100 fs-montserrat bold-500">login</p></a>
    
    <i class="uil uil-search"></i>
    <i
      id="cart-box"
      aria-controls="cart-icon"
      class="uil uil-shopping-bag"
    ></i> --}}

    
    </div>
  </div>
  <div class="mobile-open-btn"><i class="uil uil-align-right"></i></div>
</header>