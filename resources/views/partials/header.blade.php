<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">

        {{-- LOGO DAN NAMA WEBSITE --}}
        <a class="navbar-brand text-white d-flex align-items-center gap-2"
            href="{{ url('/') }}">

            <img
                src="{{ asset('assets/images/logo.jpeg') }}"
                alt="Logo GreenGoods"
                style="width: 42px; height: 42px; object-fit: contain;"
            >

            <span class="fw-bold">GreenGoods</span>
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarGreenGoods"
            aria-controls="navbarGreenGoods"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarGreenGoods">
            <ul class="navbar-nav ms-auto gap-lg-3">

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link text-white">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/products') }}" class="nav-link text-white">
                        Katalog Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/profile') }}" class="nav-link text-white">
                        Profil
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/contact') }}" class="nav-link text-white">
                        Contact
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>