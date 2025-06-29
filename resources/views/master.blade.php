@include('layouts.header')

<main class="main">
    <!-- Hero Section -->
    <section class="hero section py-5 bg-light">
        <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center text-center text-lg-start position-relative" data-aos="zoom-out">
            
            <!-- Text Area -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-5 fw-bold text-primary">Selamat Datang di <span class="text-success">Jasaku</span></h1>
                <p class="mt-3 fs-5 text-muted">
                    Pesan layanan jadi lebih <strong>mudah</strong>, <strong>cepat</strong>, dan <strong>profesional</strong> bersama Jasaku.
                    <br>Dengan Jasaku, booking jasa seperti cleaning service, jasa angkut barang, hingga perbaikan AC jadi lebih mudah, cepat, dan profesional.
                </p>
                <a href="{{ route('login') }}" class="btn btn-success btn-lg mt-4 px-4">Mulai Layanan</a>
            </div>

            <!-- Gambar -->
            <div class="col-lg-5">
              <img src="{{ asset('HeroBiz') }}/assets/img/logo-jasa.png" alt="Repairin Logo"
                    style="width: 100%; max-width: 450px; height: auto;" class="animated">
            </div>

        </div>
    </section>

    <!-- Content Section -->
    <section class="py-5">
        <div class="container">
            @yield('content')
        </div>
    </section>
</main>

@include('layouts.footer')