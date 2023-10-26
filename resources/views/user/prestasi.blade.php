@extends('user.layouts.app')

@section('title', 'Prestasi')

@section('content')

    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1 class="mb-3 text-white">Prestasi Mahasiswa <span>HMIF-ITI</span></h1>
            <h6 class="teks text-white">Berkilau di Puncak Prestasi! Halaman Prestasi Mahasiswa
                <br>HMIF-ITI, Tempat Inspirasi!
                </h5>
        </div>
    </section>

    <div id="prestasi" class="row px-5 mb-4">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 p-5 ">
            @foreach ($achievments as $achievment)
                <div class="col">
                    <div class="card prestasi-card">
                        <div class="card-body p-0"><img src="image/{{ $achievment->image }}" alt=""
                                class="w-100 card-img-top prestasi-img">
                            <div class="p-4">
                                <h5 class="mb-0 card-title">{{ $achievment->description }}</h5>
                                <a href="#" class="small">baca selengkapnya ></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
