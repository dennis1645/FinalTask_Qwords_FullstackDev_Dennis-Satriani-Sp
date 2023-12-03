@extends('template.tema')
{{-- Judul --}}
@section('title', 'Landing Page Q-Words')

{{-- Navbar --}}
@section('navbar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.webp') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Domain</a></li>
                            <li><a class="dropdown-item" href="#">Server</a></li>
                            <li><a class="dropdown-item" href="#">Cloud Hosting</a></li>
                            <li><a class="dropdown-item" href="#">Email Suite</a></li>
                            <li><a class="dropdown-item" href="#">Internet Acces</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promo</a>
                    </li>
                </ul>


                <button class="btn btn-outline-danger" type="submit">Login</button>

            </div>
        </div>
    </nav>
@endsection

{{-- Kontent --}}
@section('content')

    {{-- Hero --}}
    <div class="container-fluid col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Cloud Hosting
                    untuk
                    Kesuksesan Websitemu!</h1>
                <p class="col-lg-10 fs-4">Qwords menawarkan
                    layanan Cloud Hosting yang Cepat, Aman, dan Dukungan 24 jam untuk memenuhi kebutuhan hosting Anda.
                    Tersertifikasi ISO 27001 dengan Data Center Tier 3.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                    <h3 class="text-center mb-3">Daftar Sekarang !</h3>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Paket</option>
                            <option value="1">Paket UMKM Murah Meriah</option>
                            <option value="2">Paket Premium</option>
                            <option value="3">Paket Harga Sahabat Q-Words</option>
                        </select>
                        <label for="floatingPassword">Pilih Paket</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar Sekarang</button>
                    <hr class="my-4">
                    <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                </form>
            </div>
        </div>
    </div>

    {{-- Hero End --}}

    {{-- Paket Cloud Hosting --}}
    <div class="container mt-5">
        <div class="col">
            <div class="row">
                <h1 class="text-center fw-bold">Cloud Hosting Indonesia Diskon Hingga 50%</h1>
                <p class="text-center">Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website anda</p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('img/paket1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">VCH1</h4>
                            <p class="card-text">Value Cloud Hosting</p>
                            <h5 class="text-decoration-line-through">Rp 24.500</h5>
                            <h3 class="fw-bold mt-3 mb-3" style="color: red;">Rp14.500</h3>
                            <p>Fitur : </p>
                            <ul>
                                <li>Disk ==> 3Gb </li>
                                <li>Bandwitch ==> Unlimited</li>
                                <li>Core CPU ==> 0,5 core</li>
                                <li>Addon / Parked Domain ==> No</li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('img/paket2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Signature</h4>
                            <p class="card-text">Unlimited Hosting</p>
                            <h5 class="text-decoration-line-through">Rp 109.500</h5>
                            <h3 class="fw-bold mt-3 mb-3" style="color: red;">Rp89.900</h3>
                            <p>Fitur : </p>
                            <ul>
                                <li>Disk ==> Unlimited </li>
                                <li>Bandwitch ==> Unlimited</li>
                                <li>Core CPU ==> 1 core</li>
                                <li>Addon / Parked Domain ==> 5/5</li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('img/paket3.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">HPCH Bisnis 1</h4>
                            <p class="card-text">High Performance</p>
                            <h5 class="text-decoration-line-through">Rp 90.000</h5>
                            <h3 class="fw-bold mt-3 mb-3" style="color: red;">Rp79.000</h3>
                            <p>Fitur : </p>
                            <ul>
                                <li>Disk ==> 3Gb </li>
                                <li>Bandwitch ==> Unlimited</li>
                                <li>Core CPU ==> 1 core</li>
                                <li>Addon / Parked Domain ==> -</li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('img/paket4.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">VPS SC1</h4>
                            <p class="card-text">Cloud VPS KVM SSD</p>
                            <h5 class="text-decoration-line-through">Rp 135.000</h5>
                            <h3 class="fw-bold mt-3 mb-3" style="color: red;">Rp 75.000</h3>
                            <p>Fitur : </p>
                            <ul>
                                <li>Disk ==> 25Gb </li>
                                <li>Bandwitch ==> Unlimited</li>
                                <li>Core CPU ==> 1 core</li>
                                <li>Addon / Parked Domain ==> Unlimited</li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        {{-- Layanan Lainnya --}}
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h1 class="fw-bold text-center">Lihat Juga Layanan Kami Yang Lain</h1>
                    <p class="text-center">Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari
                        Qwords</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">SSL</h5>
                                <p class="card-text">Jadikan website Anda lebih terpercaya dan disukai oleh search engine
                                    dengan menggunakan SSL Certificate.</p>
                                <p>Mulai dari :</p>
                                <h3 class="mt-3 mb-3 fw-bold" style="color:red">Rp 112.000/tahun</h3>
                                <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Dedicated Server</h5>
                                <p class="card-text">Nikmati kelola Dedicated Server sendiri dengan akses remote dari
                                    seluruh dunia tanpa batas</p>
                                <p>Mulai dari :</p>
                                <h3 class="mt-3 mb-3 fw-bold" style="color:red">Rp 499.000 / bulan</h3>
                                <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Colocation Server</h5>
                                <p class="card-text">Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring
                                    dengan cooling system terbaik serta fire extinguisher</p>
                                <p>Mulai dari :</p>
                                <h3 class="mt-3 mb-3 fw-bold" style="color:red">Rp 500.000 / bulan</h3>
                                <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Komitmen --}}
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h1 class="text-center fw-bold">Komitmen Kami</h1>
                    <p class="text-center">Berbagai alasan mengapa pelanggan memilih kami</p>
                </div>
                <div class="row">
                    <div class="container px-4 py-3" id="hanging-icons">
                        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                            <div class="col d-flex align-items-start">
                                <div
                                    class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                    <svg class="bi" width="1em" height="1em">
                                        <use xlink:href="#toggles2" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fs-2 text-body-emphasis">Layanan 24/7</h3>
                                    <p>Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7
                                        hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket.</p>
                                    <a href="#" class="btn btn-primary">
                                        Call team us
                                    </a>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <div
                                    class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                    <svg class="bi" width="1em" height="1em">
                                        <use xlink:href="#cpu-fill" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fs-2 text-body-emphasis">Jaminan keamanan</h3>
                                    <p>Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang
                                        berstandar & berkelanjutan telah menjadi perhatian utama kami.</p>
                                    <a href="#" class="btn btn-primary">
                                        Tenang udah di jagain kok
                                    </a>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <div
                                    class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                    <svg class="bi" width="1em" height="1em">
                                        <use xlink:href="#tools" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fs-2 text-body-emphasis">Peering Network</h3>
                                    <p>Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang
                                        membuat latency atau waktu tunggu pengiriman data semakin kecil.</p>
                                    <a href="#" class="btn btn-primary">
                                        Keren Kan ?
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Footer --}}
@section('footer')
    <div class="container-fluid bg-dark text-white p-3">
        <div class="row">
            <div class="col">
                <p class="text-center pt-3">PT Qwords Company International</p>
            </div>
        </div>
    </div>
@endsection
