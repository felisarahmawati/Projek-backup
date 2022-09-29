<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">

            {{-- <img src="../../../img/Logo2.png" alt="" width="220px" height="100px"> --}}
            <img src="../../../img/Logo2.png" alt=""> 

        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link {{ Request::is('/') ? 'active' :'' }}" href="/user/index">Home</a></li>
                <li><a class="nav-link {{ Request::is('tentang') ? 'active' :'' }}" href="/user/tentang">Tentang</a></li>
                <li><a class="nav-link {{ Request::is('layanan') ? 'active' :'' }}" href="/user/layanan">Layanan</a></li>
                <li><a class="nav-link {{ Request::is('kontak') ? 'active' :'' }}" href="/user/kontak">Kontak</a></li>
                {{-- <li><a class="nav-link {{ Request::is('login') ? 'active' :'' }}" href="/login"></a></li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/user/profile/profileuser">Profile</a></li>
                      <li><a class="dropdown-item" href="/user/pemesanan/wishlist">Wishlist</a></li>
                      <li><a class="dropdown-item" href="/user/pemesanan/History/On_Progress">Pesanan</a></li>
                      <li><a class="dropdown-item" href="/user/pemesanan/History/Last_Progress">History</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </li>
                   
                    </ul>
                </li>

                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
<!-- End Header -->