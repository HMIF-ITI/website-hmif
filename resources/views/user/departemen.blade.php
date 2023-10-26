@extends('user.layouts.app')

@section('title', 'Departemen')

<!DOCTYPE html>
<html lang="en">

{{-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head> --}}

<body>

    @section('content')
        <section id="hero" class="d-flex align-items-center">
            <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
                <h1 class="mb-3 text-white">Departemen Himpunan Mahasiswa <span>Teknik Informatika</span></h1>
                <h6 class="teks text-white">Kepengurusan HMIF 2023/2024 terdiri dari 3 departemen, 5 divisi,<br> dan 59
                    anggota
                    bermandat dengan tugas dan
                    <br>program kerja yang berbeda.
                    </h5>
            </div>
        </section>

        <!-- Content Section -->
        <section class="flex flex-col gap-20 py-20">
            <article class="bg-[#F5F7F9] py-10 px-8 lg:px-[116px]">
                <div class="flex justify-between items-start md:items-center gap-8 md:flex-row flex-col">
                    <img src="{{ url('/asset/images/departemen/partners-first.png') }}" alt="Gambar Departemen">
                    <h2 class="-order-last md:order-1 md:text-3xl sm:text-2xl text-xl font-bold">Departemen Pengembangan
                        Sumber Daya <span
                            class="relative after:block after:w-24 after:h-[4px] after:absolute after:right-0 after:bg-black">Manusia</span>
                    </h2>
                </div>
                <div class="space-y-8 mt-8">
                    <div>
                        <h3 class="md:text-xl sm:text-lg text-base font-semibold">Tugas</h3>
                        <ul class="md:text-lg sm:text-base text-sm list-decimal list-outside text-[#4F5E71] font-medium">
                            <li>Bertanggung jawab secara penuh kepada ketua serta wakil ketua Himpunan Mahasiswa Teknik
                                Informatika.</li>
                            <li>Bertanggung jawab atas pelaksanaan kegiatan pengembangan sumber daya manusia melalui program
                                kaderisasi.</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="md:text-xl sm:text-lg text-base font-semibold">Proker</h3>
                        <ul class="md:text-lg sm:text-base text-sm list-decimal list-outside text-[#4F5E71] font-medium">
                            <li>Melaksanakan kegiatan kaderisasi pada tingkat program studi yang sesuai dengan tahapannya.
                            </li>
                            <li>Melakukan pemutakhiran terhadap kegiatan pengembangan sumber daya manusia.</li>
                            <li>Menyusun strategi kegiatan kaderisasi bagi warga Himpunan Mahasiswa Teknik Informatika.</li>
                            <li>Melaksanakan pembinaan terhadap calon pengurus selanjutnya melalui peningkatan kapasitas
                                kepemimpinan.</li>
                        </ul>
                    </div>
                </div>
            </article>
            <article class="bg-[#F5F7F9] py-10 px-8 lg:px-[116px]">
                <div class="flex justify-between items-start md:items-center gap-8 md:flex-row flex-col">
                    <h2 class="md:text-3xl sm:text-2xl text-xl font-bold"><span
                            class="relative after:hidden md:after:block after:w-24 after:h-[4px] after:absolute after:left-0 after:bg-black">DEPARTEMEN</span>
                        KOMUNIKASI DAN <span
                            class="relative after:block after:w-24 after:h-[4px] md:after:hidden after:absolute after:right-0 after:bg-black">INFORMASI</span>
                    </h2>
                    <img src="{{ url('/asset/images/departemen/partners-second.png') }}" alt="Gambar Departemen">
                </div>
                <div class="space-y-8 mt-8">
                    <div>
                        <h3 class="md:text-xl sm:text-lg text-base font-semibold">Tugas</h3>
                        <ul class="md:text-lg sm:text-base text-sm list-decimal list-outside text-[#4F5E71] font-medium">
                            <li>Bertanggung jawab secara penuh kepada ketua serta wakil ketua Himpunan Mahasiswa Teknik
                                Informatika.</li>
                            <li>Bertanggung jawab atas pelaksanaan kegiatan pengembangan sumber daya manusia melalui program
                                kaderisasi.</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="md:text-xl sm:text-lg text-base font-semibold">Proker</h3>
                        <ul class="md:text-lg sm:text-base text-sm list-decimal list-outside text-[#4F5E71] font-medium">
                            <li>Melaksanakan kegiatan kaderisasi pada tingkat program studi yang sesuai dengan tahapannya.
                            </li>
                            <li>Melakukan pemutakhiran terhadap kegiatan pengembangan sumber daya manusia.</li>
                            <li>Menyusun strategi kegiatan kaderisasi bagi warga Himpunan Mahasiswa Teknik Informatika.</li>
                            <li>Melaksanakan pembinaan terhadap calon pengurus selanjutnya melalui peningkatan kapasitas
                                kepemimpinan.</li>
                        </ul>
                    </div>
                    <div class="flex gap-4 flex-wrap">
                        <a href="#" class="py-2 px-4 rounded bg-[#FD6B04] text-white no-underline">Divisi Media</a>
                        <a href="#" class="py-2 px-4 rounded bg-[#FD6B04] text-white no-underline">Divisi Humas</a>
                    </div>
                </div>
            </article>
            <article class="bg-[#F5F7F9] py-10 px-8 lg:px-[116px]">
                <div class="flex justify-between items-start md:items-center gap-8 md:flex-row flex-col">
                    <img src="{{ url('/asset/images/departemen/partners-third.png') }}" alt="Gambar Departemen">
                    <h2 class="-order-last md:order-1 md:text-3xl sm:text-2xl text-xl font-bold">Departemen Pengembangan
                        Sumber Daya <span
                            class="relative after:block after:w-24 after:h-[4px] after:absolute after:right-0 after:bg-black">Manusia</span>
                    </h2>
                </div>
                <div class="space-y-8 mt-8">
                    <div>
                        <h3 class="md:text-xl sm:text-lg text-base font-semibold">Tugas</h3>
                        <ul class="md:text-lg sm:text-base text-sm list-decimal list-outside text-[#4F5E71] font-medium">
                            <li>Bertanggung jawab secara penuh kepada ketua serta wakil ketua Himpunan Mahasiswa Teknik
                                Informatika.</li>
                            <li>Bertanggung jawab atas pelaksanaan kegiatan pengembangan sumber daya manusia melalui program
                                kaderisasi.</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="md:text-xl sm:text-lg text-base font-semibold">Proker</h3>
                        <ul class="md:text-lg sm:text-base text-sm list-decimal list-outside text-[#4F5E71] font-medium">
                            <li>Melaksanakan kegiatan kaderisasi pada tingkat program studi yang sesuai dengan tahapannya.
                            </li>
                            <li>Melakukan pemutakhiran terhadap kegiatan pengembangan sumber daya manusia.</li>
                            <li>Menyusun strategi kegiatan kaderisasi bagi warga Himpunan Mahasiswa Teknik Informatika.</li>
                            <li>Melaksanakan pembinaan terhadap calon pengurus selanjutnya melalui peningkatan kapasitas
                                kepemimpinan.</li>
                        </ul>
                    </div>
                    <div class="flex gap-4 lg:justify-end flex-wrap">
                        <a href="#" class="py-2 px-4 rounded bg-[#FD6B04] text-white no-underline">Divisi Akademis &
                            Litbang</a>
                        <a href="#" class="py-2 px-4 rounded bg-[#FD6B04] text-white no-underline">Divisi Pembangunan
                            & Inventaris</a>
                        <a href="#" class="py-2 px-4 rounded bg-[#FD6B04] text-white no-underline">Divisi Danus</a>
                    </div>
                </div>
            </article>
        </section>
    @endsection
</body>

</html>
