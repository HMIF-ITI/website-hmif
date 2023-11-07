@extends('user.layouts.app')

@section('title', 'Welcome')

@section('content')

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
                    <p class="fw-light">Menjadikan HMIF sebagai wadah bagi anggota maupun calon anggota untuk mengembangkan
                        diri dalam
                        bidang akademik maupun non akademik dan menjadikan HMIF ITI menjadi organisasi yang aktif solutif
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
                        bidang akademik maupun non akademik dan menjadikan HMIF ITI menjadi organisasi yang aktif solutif
                        dan produktif secara internal maupun eksternal demi terwujudnya Tri Dharma Perguruan Tinggi</p>
                </div>
                <div class="col col-lg-5 py-3">
                    <h3 class="fs-3 fw-bolder mb-3">Misi</h3>
                    <p>1.Meningkatkan kualitas secara akademik setiap anggota maupun calon anggota HMIF ITI</p>
                    <p>2.Meningkatkan kualitas kegiatan sosial mahasiswa</p>
                    <p>3.Membangun jaringan & kemitraan dengan pihak kampus organisasi kemahasiswaan lain & masyarakat umum
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
            <div class="row row-cols-lg-3 row-cols-md-3 row-cols-2 mx-auto text-center justify-content-center list-proker">
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

    {{-- Kegiatan --}}
    <section id="kegiatan">
        <div class="kegiatan-progress container">
            <div class="row">
                <div class="col">
                    <h3 class="fs-3 fw-bolder mb-4">Kegiatan Berlangsung</h3>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                @foreach ($ongoings as $index => $ongoing)
                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-center pb-5">
                        <div class="card">
                            <img src="image/{{ $ongoing->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="fw-bold fs-5">{{ $ongoing->title }}</h5>
                                <p class="fw-light">{{ $ongoing->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col">
                    <h3 class="fs- fw-bolder mb-4">Kegiatan Mendatang</h3>
                </div>
            </div>
            <div class="row justify-content-center align-content-center">
                @foreach ($upcomings as $index => $upcoming)
                    @if ($index % 2 == 0)
                        <div class="w-100"></div> <!-- Ini untuk membuat baris baru setiap dua data -->
                    @endif
                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-center pb-5">
                        <div class="card">
                            <img src="image/{{ $upcoming->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="fw-bold fs-5">{{ $upcoming->title }}</h5>
                                <p class="fw-light">{{ $upcoming->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            {{-- <h1 class="mx-3">Kegiatan Berlangsung</h1>
            <div class="row">
                @foreach ($ongoings as $index => $ongoing)
                    <div class="col-md-4 col-sm-6" {{ $index === 0 ? 'active' : '' }}>
                        <div class="card">
                            <img src="image/{{ $ongoing->image }}" alt="" class="img-thumbnail" width="360"
                                height="140">
                            <div class="card-body">
                                <h5 class="card-title">{{ $ongoing->title }}</h5>
                                <p class="card-text">{{ $ongoing->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </section>

    {{-- Moment --}}
    <section id="moment">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="fs-2 fw-bolder mb-3 text-center">Moment Terbaik Bersama Kami</h3>
                </div>
            </div>
            {{-- <div class="moment-judul text-center">
                <h1></h1>
            </div> --}}
            <div class="row">
                @foreach ($moments as $moment)
                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-center pb-5">
                        <div class="card">
                            <img src="image/{{ $moment->image }}" alt="" class="img-thumbnail" width="360"
                                height="140">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Kritik --}}
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="section-title">
                        <h2>Kritik & Saran</h2>
                        <p>
                            Kami selalu siap mendengar suara Anda! Kirim kritik dan saran Anda untuk membantu kami menjadi
                            lebih baik!
                        </p>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-right">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Nama Kamu" required />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Pesan yang ingin disampaikan" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
