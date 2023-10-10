@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left hero-text" data-aos="fade-up">
      <h1>Prestasi Mahasiswa <span>HMIF-ITI</span></h1>
      <h3>Berkilau di Puncak Prestasi! Halaman Prestasi Mahasiswa</h3>
      <h3>HMIF-ITI, Tempat Inspirasi!</>
    </div>
  </section>


  <div id="prestasi" class="row px-5 mb-4">
    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 p-5">
      <div class="col">
        <div class="card prestasi-card">
          <div class="card-body p-0"><img src="{{ asset('assets/image/card-thumbnail.svg') }}" alt="" class="w-100 card-img-top prestasi-img">
            <div class="p-4">
              <h5 class="mb-0 card-title">Mahasiswa ITI Prodi Teknik Informatika berhasil memenangkan lomba web design</h5>
              <a href="#" class="small">baca selengkapnya ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-2 prestasi-card">
          <div class="card-body p-0"><img src="{{ asset('assets/image/card-thumbnail.svg') }}" alt="" class="w-100 card-img-top prestasi-img">
            <div class="p-4">
              <h5 class="mb-0 card-title">Mahasiswa ITI Prodi Teknik Informatika berhasil memenangkan lomba web design</h5>
              <a href="#" class="small">baca selengkapnya ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-2 prestasi-card">
          <div class="card-body p-0"><img src="{{ asset('assets/image/card-thumbnail.svg') }}" alt="" class="w-100 card-img-top prestasi-img">
            <div class="p-4">
              <h5 class="mb-0 card-title">Mahasiswa ITI Prodi Teknik Informatika berhasil memenangkan lomba web design</h5>
              <a href="#" class="small">baca selengkapnya ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-2 prestasi-card">
          <div class="card-body p-0"><img src="{{ asset('assets/image/card-thumbnail.svg') }}" alt="" class="w-100 card-img-top prestasi-img">
            <div class="p-4">
              <h5 class="mb-0 card-title">Mahasiswa ITI Prodi Teknik Informatika berhasil memenangkan lomba web design</h5>
              <a href="#" class="small">baca selengkapnya ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-2 prestasi-card">
          <div class="card-body p-0"><img src="{{ asset('assets/image/card-thumbnail.svg') }}" alt="" class="w-100 card-img-top prestasi-img">
            <div class="p-4">
              <h5 class="mb-0 card-title">Mahasiswa ITI Prodi Teknik Informatika berhasil memenangkan lomba web design</h5>
              <a href="#" class="small">baca selengkapnya ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-2 prestasi-card">
          <div class="card-body p-0"><img src="{{ asset('assets/image/card-thumbnail.svg') }}" alt="" class="w-100 card-img-top prestasi-img">
            <div class="p-4">
              <h5 class="mb-0 card-title">Mahasiswa ITI Prodi Teknik Informatika berhasil memenangkan lomba web design</h5>
              <a href="#" class="small">baca selengkapnya ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>