<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Custom CSS --}}
    <link href="{{ url('asset/css/style.css') }}" rel="stylesheet">

</head>

<body>
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

    {{-- Section Hero --}}
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative">
            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-center align-items-center">
                <div class="col col-lg-6 text-white">
                    <h1 class="mb-3 fs-1 fw-bold">HMIF - ITI</h1>
                    <h6 class="mb-3 fs-4">Himpunan Mahasiswa Teknik Informatika Institut Teknologi Indonesia</h6>
                    <p class="fw-light">Mengembangkan potensi mahasiswa Teknik Informatika <br> dengan berlandaskan Tri
                        Dharma Perguruan
                        Tinggi
                    </p>
                </div>
                <div class="col col-lg-4 text-center">
                    <img src="{{ url('/asset/images/logo.png') }}" alt="" srcset="">
                </div>
            </div>

        </div>
    </section>

    {{-- Section Tujuan --}}
    <section id="tujuan" class="p-3">
        <div class="container align-items-center text-center align-items-center justify-content-center">
            <div class="row d-flex mx-auto mb-5 pt-5">
                <div class="col col-lg-10 mx-auto">
                    <h3 class="fs-3 fw-bolder mb-3">Gambaran Umum</h3>
                    <p class="fw-light">Himpunan Mahasiswa Teknik Informatika (HMIF) - Institut Teknologi Indonesia
                        merupakan organisasi
                        mahasiswa program studi Teknik Informatika di Institut Teknologi Indonesia yang bertujuan
                        mengembangkan potensi mahasiswa Teknik Informatika dengan berlandaskan Tri Dharma Perguruan
                        Tinggi</p>
                </div>
            </div>
            <div class="row d-flex mx-auto">
                <div class="col col-lg-10 mx-auto">
                    <span class="fw-normal text-secondary lh-1">TUJUAN</span>
                    <h3 class="fs- fw-bolder mb-3">Melangkah Bersama Menuju Kemajuan</h3>
                    <p class="fw-light">Menjadikan HMIF sebagai wadah bagi anggota maupun calon anggota untuk
                        mengembangkan
                        diri dalam
                        bidang akademik maupun non akademik dan menjadikan HMIF ITI menjadi organisasi yang aktif
                        solutif
                        dan
                        produkif secara internal maupun eksternal demi terwujudnya Tri Dharma Perguruan Tinggi</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Visi-Misi --}}
    <section id="vm" class="d-flex align-items-center">
        <div class="vm-judul container m-5 py-5">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="text-center fs-2">Visi & Misi</h1>
                </div>
            </div>
            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-center">
                <div class="col col-lg-5 py-3">
                    <h3 class="fs-3 fw-bolder mb-3">Visi</h3>
                    <p>Menjadikan HMIF sebagai wadah bagi anggota maupun calon anggota untuk
                        mengembangkan diri dalam
                        bidang akademik maupun non akademik dan menjadikan HMIF ITI menjadi organisasi yang aktif
                        solutif
                        dan produktif secara internal maupun eksternal demi terwujudnya Tri Dharma Perguruan Tinggi</p>
                </div>
                <div class="col col-lg-5 py-3">
                    <h3 class="fs-3 fw-bolder mb-3">Misi</h3>
                    <p>1.Meningkatkan kualitas secara akademik setiap anggota maupun calon anggota HMIF ITI</p>
                    <p>2.Meningkatkan kualitas kegiatan sosial mahasiswa</p>
                    <p>3.Membangun jaringan & kemitraan dengan pihak kampus organisasi kemahasiswaan lain & masyarakat
                        umum
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Proker --}}
    <section id="proker">
        <div class="proker-judul container text-center">
            <div class="row mb-5">
                <div class="col">
                    <span class="fw-normal text-secondary lh-1">PROGRAM KERJA</span>
                    <h3 class="fs-2 fw-bolder mb-3">Aksi Kami untuk Kemajuan Bersama!</h3>
                </div>
            </div>
            <div
                class="row row-cols-lg-3 row-cols-md-3 row-cols-2 mx-auto text-center justify-content-center list-proker">
                <div class="col">
                    <p>ABDIMAS</p>
                </div>
                <div class="col">
                    <p>INFOCUP</p>
                </div>
                <div class="col">
                    <p>PELITA</p>
                </div>
                <div class="col">
                    <p>LDO</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <img src="{{ url('asset/images/logo.png') }}" alt="" class="img-thumbnail"
                            width="175" height="175">
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links text-white">
                        <h4>Afiliasi Lembaga</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://iti.ac.id/">Institut Teknologi
                                    Indonesia</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://if.iti.ac.id/">Teknik Informatika
                                    ITI</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="">MPM ITI</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="">BEM ITI</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://permikomnas.blogspot.com/">Permikomnas</a></li>
                        </ul>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div> -->

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4 class="text-white">Hubungi Kami</h4>
                        {{-- <p>{{ $contacts->name }}</p>
                        <p>{{ $contacts->alamat }}</p>
                        <p>{{ $contacts->email }}</p>
                        <p>{{ $contacts->telepon }}</p> --}}

                        <p>Himpunan Teknik Informatika - ITI</p>
                        <p>Jl. Raya Puspiptek Serpong Kota Tangerang Selatan 15314</p>
                        <p>iti.hmif@gmail.com</p>
                        {{-- <p>{{ $contacts->telepon }}</p> --}}
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright text-center">
                    &copy; Copyright <strong><span>HMIF ITI</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
