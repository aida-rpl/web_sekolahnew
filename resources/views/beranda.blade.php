<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/LOGO-removebg-preview.png') }}" alt="" width="30"
                            height="24" class="d-inline-block align-text-top">
                        SMK PGRI WLINGI
                    </a>
                </div>
            </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Akademik
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kesiswaan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Berita
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kontak">Kontak</a>
                    </li>
                </ul>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-search" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/hammer.jpg') }}" class="d-block w-100" alt="..." height="300">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang di Website SMK PGRI WLINGI</h5>
                    <p>Bersama kita wujudkan generasi yang cerdas, berakhlak, dan berprestasi</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/homda.jpg') }}" class="d-block w-100" alt="..." height="300">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang di Website SMK PGRI WLINGI</h5>
                    <p>Bersama kita wujudkan generasi yang cerdas, berakhlak, dan berprestasi</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/rpl.jpg') }}" class="d-block w-100" alt="..." height="300">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang di Website SMK PGRI WLINGI</h5>
                    <p>Bersama kita wujudkan generasi yang cerdas, berakhlak, dan berprestasi</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card mt-3">
                    <div class="card-header bg-info-subtle">
                        <h2>Sambutan Kepala Sekolah</h2>
                    </div>
                    <div class="card-body">
                        <img src="/IMAGES/bambang.jpg" class="rounded float-start me-3" alt=".." width=200
                            height=250>
                        <h3>Assalamu'alaikum wr.wb</h3>
                        <p>
                            Selamat datang di website SMK PGRI WLINGI. Semoga website ini dapat menjadi media informasi
                            yang bermanfaat bagi siswa, orang tua, guru, alumni, dan masyarakat. Mari bersama-sama
                            mewujudkan generasi yang cerdas, berakhlak, terampil, dan berprestasi..Wassalamualaikum
                            Warahmatullahi Wabarakatuh.
                            <br><br>
                            <b>Kepala SMK PGRI WLINGI</b><br><br>
                            <b>Drs. BAMBANG SETIYONO, S.T., M.Pd</b>
                        </p>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header bg-primary-subtle">
                        <b>Kegiatan Terbaru</b>
                        <a href="#" class="float-end">
                            Lihat Semua Kegiatan
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-3 mt-2">
                            <div class="card">
                                <img src="{{ asset('images/upacara.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        Kegiatan upacara dalam rangka memperingati HUT ke-80 Kemerdekaan RI dengan
                                        pengibaran Bendera Merah Putih.Kegiatan ini berlangsung dengan khidmat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card">
                                <img src="{{ asset('images/pramuka.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        Salam Pramuka! Pada tanggal 14 Agustus 2026, SMKS PGRI Wlingi melaksanakan
                                        kegiatan Upacara Hari Pramuka ke-65 dengan penuh semangat dan khidmat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card">
                                <img src="{{ asset('images/mpls.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        Pada hari Selasa, 14 Juli 2026, SMK PGRI WLINGI sukses melaksanakan kegiatan
                                        MPLS hari ke-2. Agenda penting yang diikuti oleh para peserta hari ini adalah
                                        sosialisasi
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card">
                                <img src="{{ asset('images/dn.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        HALLO SOBAT HAMMER SCHOOL!!!<br> Menyambut kemeriahan Dies Natalis ke-39 SMK
                                        PGRI Wlingi bersama penampilan Guyon Waton dan Ajeng Febria!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 accordion">
                <div class="card mt-3">
                    <div class="card">
                        <div class="card-header bg-info-subtle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                                <path
                                    d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06" />
                            </svg>
                            Pengumuman Terbaru
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <div
                                            class="d-inline-flex p-2 bg-light border border-secondary-subtle rounded-3 shadow-sm">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="ms-2">
                                            <a
                                                href="https://www.instagram.com/reel/DEpESTKyDm2/?utm_source=ig_web_copy_link&rpxt=NTc4MTIwNjQ2YQ==">Pendaftaran
                                                Peserta Didik Baru Tahun Ajaran 2025/2026</a>
                                        </div>
                                        <div class="text-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                                <path
                                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                            </svg>
                                            15 Apr 2025
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <div
                                            class="d-inline-flex p-2 bg-light border border-secondary-subtle rounded-3 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="ms-2">
                                            <a
                                                href="https://www.scribd.com/document/897528383/Kalender-Pendidikan-2024-2025-Smk-Pgri-Wlingi">Jadwal
                                                Ujian Semester Genap Tahun Ajaran 2024/2025</a>
                                        </div>
                                        <div class="text-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                                <path
                                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                            </svg>
                                            10 Apr 2025
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <div
                                            class="d-inline-flex p-2 bg-light border border-secondary-subtle rounded-3 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="ms-2">
                                            <a
                                                href="https://www.instagram.com/p/DH2CI8bB1P-/?utm_source=ig_web_copy_link&dlrf=NTc4MTIwNjQ2YQ==">Informasi
                                                Libur Idul Fitri 1446 H</a>
                                        </div>
                                        <div class="text-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                                <path
                                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                            </svg>
                                            25 Mar 2025
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <div
                                            class="d-inline-flex p-2 bg-light border border-secondary-subtle rounded-3 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="ms-2">
                                            <a
                                                href="https://www.instagram.com/p/DJlGkkjBB-s/?utm_source=ig_web_copy_link&psln=NTc4MTIwNjQ2YQ==">Tasyakuran
                                                Kelulusan Peserta Didik Kelas XII Tahun Pelajaran 2024/2025</a>
                                        </div>
                                        <div class="text-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                                <path
                                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                            </svg>
                                            20 Mar 2025
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <div
                                            class="d-inline-flex p-2 bg-light border border-secondary-subtle rounded-3 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="ms-2">
                                            <a
                                                href="https://www.instagram.com/p/DWcxQNyEzdo/?utm_source=ig_web_copy_link&mdxt=NTc4MTIwNjQ2YQ==">Halal
                                                Bihalal guru dan karyawan yang bertempat di Kampus 2 SMK PGRI
                                                Wlingi.</a>
                                        </div>
                                        <div class="text-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                                <path
                                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                            </svg>
                                            12 Mar 2025
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="card-footer">
                            <a class="float-end btn btn-primary">
                                Lihat Semua Pengumuman
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-5 my-5"></div>
    <nav class="navbar fixed-bottom bg-dark navbar-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/LOGO-removebg-preview.png') }}" alt="" width="30"
                    height="24" class="d-inline-block align-text-top">
                SMK PGRI WLINGI
            </a>
            <a class="navbar-brand" href="#">
                <div class="class text-secondary small">
                    Website Ini Dikembangkan oleh
                </div>
                <h5>Klik Komputer dan Audio Blitar</h5>
                <div class="class text-secondary small">
                    Solusi Teknologi untuk Pendidikan
                </div>
            </a>
            <a class="navbar-brand" href="#">
                <small>&copy; 2026 SMK PGRI WLINGI .all rights reserved.<br>
                    powered by klinik komputer dan audio gitar</small>
            </a>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

</body>

</html>
