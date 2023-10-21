  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="{{ url('/') }}"><span>HMIF</span></a></h1>
          {{-- <a href="index.html"><img src="{{  }}" alt="" class="img-fluid"></a> --}}
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="{{ url('/') }}">Beranda</a></li>
            <li><a class="nav-link scrollto" href="{{ url('prestasi') }}">Prestasi</a></li>
            <li><a class="nav-link scrollto" href="{{ url('gallery') }}">Galeri</a></li>
            <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

      </div>
    </div>
  </header>
  