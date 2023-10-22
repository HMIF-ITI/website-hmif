@extends('user.layouts.app')

@section('title', 'Welcome')

@section('content')

    {{-- Section Hero --}}
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative">
            <h1>HMIF - ITI</h1>
            <h5>Mengembangkan potensi mahasiswa Teknik Informatika dengan berlandaskan Tri Dharma Perguruan Tinggi</h5>
            <h3>Periode 2023/2024</h3>
        </div>
    </section>

    {{-- Section Tujuan --}}
    <section id="tujuan" class="d-flex align-items-center">
        <div class="tujuan-1 container text-center position-relative">
            <h1>Gambaran Umum</h1>
            <h5>Himpunan Mahasiswa Teknik Informatika (HMIF) - Institut Teknologi Indonesia merupakan organisasi mahasiswa
                program studi Teknik Informatika di Institut Teknologi Indonesia yang bertujuan mengembangkan potensi
                mahasiswa Teknik Informatika dengan berlandaskan Tri Dharma Perguruan Tinggi</h5>
            <h1>Melangkah Bersama Menuju Kemajuan</h1>
            <h5>Menjadikan HMIF sebagai wadah bagi anggota maupun calon anggota untuk mengembangkan diri dalam bidang
                akademik maupun non akademik dan menjadikan HMIF ITI menjadi organisasi yang aktif solutif dan produkif
                secara internal maupun eksternal demi terwujudnya Tri Dharma Perguruan Tinggi</h5>
        </div>
    </section>

    {{-- Section Visi-Misi --}}
    <section id="vm" class="d-flex align-items-center">
        <div class="vm-judul container text-center">
            <h1>Visi & Misi</h1>
            <div class="vm-visi-misi container">
                <div class="vm-kolom">
                    <h1>Visi</h1>
                    <h5>Menjadikan HMIF sebagai wadah bagi anggota maupun calon anggota untuk mengembangkan diri dalam
                        bidang akademik maupun non akademik dan menjadikan HMIF ITI menjadi organisasi yang aktif solutif
                        dan produktif secara internal maupun eksternal demi terwujudnya Tri Dharma Perguruan Tinggi</h5>
                </div>
                <div class="vm-kolom">
                    <h1>Misi</h1>
                    <h5>1.Meningkatkan kualitas secara akademik setiap anggota maupun calon anggota HMIF ITI</h5>
                    <h5>2.Meningkatkan kualitas kegiatan sosial mahasiswa</h5>
                    <h5>3.Membangun jaringan & kemitraan dengan pihak kampus organisasi kemahasiswaan lain & masyarakat umum
                    </h5>
                </div>
            </div>
        </div>
    </section>

    {{-- Proker --}}
    <section id="proker">
        <div class="proker-judul container text-center">
            <h2>Aksi Kami untuk Kemajuan Bersama!</h2>
            <div class="proker-buttons">
                <div class="proker-col">
                    <a href="#" class="proker-button">ABDIMAS</a>
                    <a href="#" class="proker-button">I-FEST</a>
                </div>
                <div class="proker-col">
                    <a href="#" class="proker-button">PELITA</a>
                    <a href="#" class="proker-button">LDO</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Kegiatan --}}
    <section id="kegiatan">
        <div class="kegiatan-progress">
            <h1 class="mx-3">Kegiatan Berlangsung</h1>
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
            </div>
        </div>

        <div class="kegiatan-soon">
            <h1 class="mx-3">Kegiatan Mendatang</h1>
            <div class="row">
                @foreach ($upcomings as $index => $upcoming)
                    <div class="col-md-4 col-sm-6" {{ $index === 0 ? 'active' : '' }}>
                        <div class="card">
                            <img src="image/{{ $upcoming->image }}" alt="" class="img-thumbnail" width="360"
                                height="140">
                            <div class="card-body">
                                <h5 class="card-title">{{ $upcoming->title }}</h5>
                                <p class="card-text">{{ $upcoming->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Moment --}}
    <section id="moment">
        <div class="moment-judul text-center">
            <h1>Moment Terbaik Bersama Kami</h1>
        </div>
        <div class="row">
            @foreach ($moments as $moment)
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <img src="image/{{ $moment->image }}" alt="" class="img-thumbnail" width="360"
                            height="140">
                    </div>
                </div>
            @endforeach
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
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required />
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
