@extends('user.layouts.app')

@section('title', 'Gallery')

@section('content')

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>

    <body>
        <section id="hero" class="d-flex align-items-center">
            <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
                <h1 class="mb-3">Galeri Himpunan Mahasiswa Teknik Informatika ITI</h1>
                <h6 class="teks">Galeri HMIF ITI, Sarana Inspirasi Teknik Informatika!
                    </h5>
            </div>
        </section>

        <div id="galeri" class="row px-5 mb-4">
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 p-5">
                @foreach ($galleries as $gallery)
                    <div class="col">
                        <div class="card galeri-card">
                            <div class="card-body p-0"><img src="image/{{ $gallery->image }}" alt=""
                                    class="w-100 card-img-top galeri-img">
                                <div class="p-4">
                                    <h5 class="mb-0 text-center card-title">{{ $gallery->title }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>

    </html>
