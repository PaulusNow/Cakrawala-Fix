{{-- <link rel="stylesheet" href="navbar/navbar.css"> --}}
 
 <!-- Navbar -->
 {{-- <div class="fContainer">
      <nav class="wrapper">
      <div class="brand">
        <img src="asset/logo.png" alt="user">
      </div>  
      <ul class="navigation">
          <li><a href="/" class= {{$title === "Beranda" ? 'active' : ''}}>Beranda</a></li>
          <li><a href="/about" class= {{$title === "Tentang Kami" ? 'active' : ''}}>Tentang Kami</a></li>
          <li><a href="/produk" class= {{$title === "Produk" ? 'active' : ''}}>Produk</a></li>
          <li><a href="/bantuan" class= {{$title === "Pusat Bantuan" ? 'active' : ''}}>Pusat Bantuan</a></li>
          <li><a href="/login"><img src="asset/icon.png" alt="user"></a></li>
        </ul>
      </nav>
    </div> --}}

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="asset/logo.png" alt="..." width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto gap-3 justify-content-center"> <!-- Menggunakan justify-content-center di sini -->
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('produk') ? 'active' : '' }}" href="/produk">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('bantuan') ? 'active' : '' }}" href="/bantuan">Pusat Bantuan</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome, {{ auth()->user()->nama }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Pesanan Saya <i class="bi bi-car-front-fill"></i></a></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else    
        <li class="nav-item">
          <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>


    <!-- End Navbar -->