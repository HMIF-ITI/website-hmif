@extends('user.layouts.app')

@section('title', 'Kepengurusan')

@section('content')

    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1 class="mb-3 text-white">Pengurus Himpunan Mahasiswa <span>Teknik Informatika</span></h1>
            <h6 class="teks text-white">Kepengurusan HMIF 2023/2024 terdiri dari 3 departemen, 5 divisi,<br> dan 59
                anggota
                bermandat dengan tugas dan
                <br>program kerja yang berbeda.
                </h5>
        </div>
    </section>
    <div class="container">
        <div class="row g-2 gx-3">
            @foreach ($managements as $management)
                <div class="col-xl-4 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                    <div class="card_container">
                        <div class="card_header d-flex flex-row">
                            <div class="ribbon_container d-flex justify-content-center">
                                <img src="{{ url('asset/images/ribbon.svg') }}" class="ribbon" alt="ribbon" />
                            </div>
                            <div class="title_container d-flex justify-content-center align-items-center">
                                <span class="title">{{ $management->departemen }}</span>
                            </div>
                            <div class="circle_container_white">
                                <div>
                                    <div>
                                        <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                            alt="circle_white" />
                                        <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                            alt="circle_white" />
                                    </div>
                                    <div>
                                        <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                            alt="circle_white" />
                                        <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                            alt="circle_white" />
                                    </div>
                                    <div>
                                        <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                            alt="circle_white" />
                                        <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                            alt="circle_white" />
                                    </div>
                                    <div>
                                        <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                            alt="circle_white" />
                                        <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                            alt="circle_white" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_body d-flex flex-row">
                            <div class="card_body_left">
                                <div class="card_left_item">
                                    <div class="text-center card_left_name">
                                        {{ $management->nama }}
                                    </div>
                                    <hr class="horizontal_line" />
                                    <div class="text-center card_left_position">{{ $management->jabatan }}</div>
                                    <div class="icon_container d-flex justify-content-center">
                                        <div class="icon_wrapper d-flex justify-content-around">
                                            <a href="{{ $management->instagram }}">
                                                <img src="{{ url('asset/images/icon_instagram.svg') }}" alt="instagram" />
                                            </a>
                                            <a href="{{ $management->linkedin }}">
                                                <img src="{{ url('asset/images/icon_linkedin.svg') }}" alt="linkedin" />
                                            </a>
                                            <a href="{{ $management->github }}">
                                                <img src="{{ url('asset/images/icon_github.svg') }}" alt="github" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card_body_right"></div>
                        </div>
                        <div class="orange_rect"></div>
                        <div class="navy_rect">
                            <img src="{{ url('asset/images/logo_hmif.svg') }}" alt="logo_hmif" />
                        </div>
                        <div class="circle_container">
                            <div>
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                            </div>
                            <div>
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                            </div>
                            <div>
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                                <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                    alt="circle_black" />
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-xl-4 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                <div class="card_container">
                    <div class="card_header d-flex flex-row">
                        <div class="ribbon_container d-flex justify-content-center">
                            <img src="{{ url('asset/images/ribbon.svg') }}" class="ribbon" alt="ribbon" />
                        </div>
                        <div class="title_container d-flex justify-content-center align-items-center">
                            <span class="title">BPI</span>
                        </div>
                        <div class="circle_container_white">
                            <div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_body d-flex flex-row">
                        <div class="card_body_left">
                            <div class="card_left_item">
                                <div class="text-center card_left_name">
                                    ASTRID <br />
                                    QANITAH A P
                                </div>
                                <hr class="horizontal_line" />
                                <div class="text-center card_left_position">KETUA UMUM</div>
                                <div class="icon_container d-flex justify-content-center">
                                    <div class="icon_wrapper d-flex justify-content-around">
                                        <img src="{{ url('asset/images/icon_instagram.svg') }}" alt="instagram" />
                                        <img src="{{ url('asset/images/icon_linkedin.svg') }}" alt="linkedin" />
                                        <img src="{{ url('asset/images/icon_github.svg') }}" alt="github" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_body_right"></div>
                    </div>
                    <div class="orange_rect"></div>
                    <div class="navy_rect">
                        <img src="{{ url('asset/images/logo_hmif.svg') }}" alt="logo_hmif" />
                    </div>
                    <div class="circle_container">
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                <div class="card_container">
                    <div class="card_header d-flex flex-row">
                        <div class="ribbon_container d-flex justify-content-center">
                            <img src="{{ url('asset/images/ribbon.svg') }}" class="ribbon" alt="ribbon" />
                        </div>
                        <div class="title_container d-flex justify-content-center align-items-center">
                            <span class="title">BPI</span>
                        </div>
                        <div class="circle_container_white">
                            <div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_body d-flex flex-row">
                        <div class="card_body_left">
                            <div class="card_left_item">
                                <div class="text-center card_left_name">
                                    ASTRID <br />
                                    QANITAH A P
                                </div>
                                <hr class="horizontal_line" />
                                <div class="text-center card_left_position">KETUA UMUM</div>
                                <div class="icon_container d-flex justify-content-center">
                                    <div class="icon_wrapper d-flex justify-content-around">
                                        <img src="{{ url('asset/images/icon_instagram.svg') }}" alt="instagram" />
                                        <img src="{{ url('asset/images/icon_linkedin.svg') }}" alt="linkedin" />
                                        <img src="{{ url('asset/images/icon_github.svg') }}" alt="github" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_body_right"></div>
                    </div>
                    <div class="orange_rect"></div>
                    <div class="navy_rect">
                        <img src="{{ url('asset/images/logo_hmif.svg') }}" alt="logo_hmif" />
                    </div>
                    <div class="circle_container">
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                <div class="card_container">
                    <div class="card_header d-flex flex-row">
                        <div class="ribbon_container d-flex justify-content-center">
                            <img src="{{ url('asset/images/ribbon.svg') }}" class="ribbon" alt="ribbon" />
                        </div>
                        <div class="title_container d-flex justify-content-center align-items-center">
                            <span class="title">BPI</span>
                        </div>
                        <div class="circle_container_white">
                            <div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_body d-flex flex-row">
                        <div class="card_body_left">
                            <div class="card_left_item">
                                <div class="text-center card_left_name">
                                    ASTRID <br />
                                    QANITAH A P
                                </div>
                                <hr class="horizontal_line" />
                                <div class="text-center card_left_position">KETUA UMUM</div>
                                <div class="icon_container d-flex justify-content-center">
                                    <div class="icon_wrapper d-flex justify-content-around">
                                        <img src="{{ url('asset/images/icon_instagram.svg') }}" alt="instagram" />
                                        <img src="{{ url('asset/images/icon_linkedin.svg') }}" alt="linkedin" />
                                        <img src="{{ url('asset/images/icon_github.svg') }}" alt="github" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_body_right"></div>
                    </div>
                    <div class="orange_rect"></div>
                    <div class="navy_rect">
                        <img src="{{ url('asset/images/logo_hmif.svg') }}" alt="logo_hmif" />
                    </div>
                    <div class="circle_container">
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                <div class="card_container">
                    <div class="card_header d-flex flex-row">
                        <div class="ribbon_container d-flex justify-content-center">
                            <img src="{{ url('asset/images/ribbon.svg') }}" class="ribbon" alt="ribbon" />
                        </div>
                        <div class="title_container d-flex justify-content-center align-items-center">
                            <span class="title">BPI</span>
                        </div>
                        <div class="circle_container_white">
                            <div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_body d-flex flex-row">
                        <div class="card_body_left">
                            <div class="card_left_item">
                                <div class="text-center card_left_name">
                                    ASTRID <br />
                                    QANITAH A P
                                </div>
                                <hr class="horizontal_line" />
                                <div class="text-center card_left_position">KETUA UMUM</div>
                                <div class="icon_container d-flex justify-content-center">
                                    <div class="icon_wrapper d-flex justify-content-around">
                                        <img src="{{ url('asset/images/icon_instagram.svg') }}" alt="instagram" />
                                        <img src="{{ url('asset/images/icon_linkedin.svg') }}" alt="linkedin" />
                                        <img src="{{ url('asset/images/icon_github.svg') }}" alt="github" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_body_right"></div>
                    </div>
                    <div class="orange_rect"></div>
                    <div class="navy_rect">
                        <img src="{{ url('asset/images/logo_hmif.svg') }}" alt="logo_hmif" />
                    </div>
                    <div class="circle_container">
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                <div class="card_container">
                    <div class="card_header d-flex flex-row">
                        <div class="ribbon_container d-flex justify-content-center">
                            <img src="{{ url('asset/images/ribbon.svg') }}" class="ribbon" alt="ribbon" />
                        </div>
                        <div class="title_container d-flex justify-content-center align-items-center">
                            <span class="title">BPI</span>
                        </div>
                        <div class="circle_container_white">
                            <div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_body d-flex flex-row">
                        <div class="card_body_left">
                            <div class="card_left_item">
                                <div class="text-center card_left_name">
                                    ASTRID <br />
                                    QANITAH A P
                                </div>
                                <hr class="horizontal_line" />
                                <div class="text-center card_left_position">KETUA UMUM</div>
                                <div class="icon_container d-flex justify-content-center">
                                    <div class="icon_wrapper d-flex justify-content-around">
                                        <img src="{{ url('asset/images/icon_instagram.svg') }}" alt="instagram" />
                                        <img src="{{ url('asset/images/icon_linkedin.svg') }}" alt="linkedin" />
                                        <img src="{{ url('asset/images/icon_github.svg') }}" alt="github" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_body_right"></div>
                    </div>
                    <div class="orange_rect"></div>
                    <div class="navy_rect">
                        <img src="{{ url('asset/images/logo_hmif.svg') }}" alt="logo_hmif" />
                    </div>
                    <div class="circle_container">
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                <div class="card_container">
                    <div class="card_header d-flex flex-row">
                        <div class="ribbon_container d-flex justify-content-center">
                            <img src="{{ url('asset/images/ribbon.svg') }}" class="ribbon" alt="ribbon" />
                        </div>
                        <div class="title_container d-flex justify-content-center align-items-center">
                            <span class="title">BPI</span>
                        </div>
                        <div class="circle_container_white">
                            <div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                                <div>
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                    <img class="circle_white" src="{{ url('asset/images/circle_white.svg') }}"
                                        alt="circle_white" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_body d-flex flex-row">
                        <div class="card_body_left">
                            <div class="card_left_item">
                                <div class="text-center card_left_name">
                                    ASTRID <br />
                                    QANITAH A P
                                </div>
                                <hr class="horizontal_line" />
                                <div class="text-center card_left_position">KETUA UMUM</div>
                                <div class="icon_container d-flex justify-content-center">
                                    <div class="icon_wrapper d-flex justify-content-around">
                                        <img src="{{ url('asset/images/icon_instagram.svg') }}" alt="instagram" />
                                        <img src="{{ url('asset/images/icon_linkedin.svg') }}" alt="linkedin" />
                                        <img src="{{ url('asset/images/icon_github.svg') }}" alt="github" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_body_right"></div>
                    </div>
                    <div class="orange_rect"></div>
                    <div class="navy_rect">
                        <img src="{{ url('asset/images/logo_hmif.svg') }}" alt="logo_hmif" />
                    </div>
                    <div class="circle_container">
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                        <div>
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                            <img class="circle_black" src="{{ url('asset/images/circle_black.svg') }}"
                                alt="circle_black" />
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
