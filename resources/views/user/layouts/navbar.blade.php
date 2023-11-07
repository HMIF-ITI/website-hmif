  <!-- ======= Header ======= -->
  {{-- <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="{{ url('/') }}"><span>HMIF</span></a></h1> --}}
  {{-- <a href="index.html"><img src="{{  }}" alt="" class="img-fluid"></a> --}}
  {{-- </div> --}}

  {{-- <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="{{ url('/') }}">Beranda</a></li>
            <li><a class="nav-link scrollto" href="{{ url('prestasi') }}">Prestasi</a></li>
            <li><a class="nav-link scrollto" href="{{ url('galeri') }}">Galeri</a></li>
            <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{ url('departemen') }}">Departemen</a></li>
                <li><a href="{{ url('kepengurusan') }}">Kepengurusan</a></li>
              </ul>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

      </div>
    </div>
  </header> --}}

  <nav class="navbar navbar-expand-lg navbar-light navbar-transparan fixed-top">
      <div class="container">
          <a class="navbar-brand" href={{ url('/') }}>
              <img src="{{ url('asset/images/logo.png') }}" alt="Bootstrap" width="48"
                  class="d-inline-block align-text-center">
              {{-- HMIF --}}
          </a>
          <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center p-3">
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('/') }}">Beranda</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('prestasi') }}">Prestasi</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('galeri') }}">Galeri</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('departemen') }}">Departemen</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('kepengurusan') }}">Kepengurusan</a>
                  </li>
                  {{-- <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i
                              class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="{{ url('departemen') }}">Departemen</a></li>
                          <li><a href="{{ url('kepengurusan') }}">Kepengurusan</a></li>
                      </ul>
                  </li> --}}
                  {{-- <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li> --}}
              </ul>
          </div>
      </div>
  </nav>
