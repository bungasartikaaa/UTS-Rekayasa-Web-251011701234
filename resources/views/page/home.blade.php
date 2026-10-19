@extends('layouts.app')

@section('title', 'Beranda GreenGoods')

@section('content')
<div class="container py-5">

    {{-- HERO SECTION --}}
    <section class="rounded-4 p-4 p-md-5 mb-5"
        style="background: linear-gradient(135deg, #e3efdf, #f7f9f5);">

        <div class="row align-items-center">
            <div class="col-lg-7">
                <span class="badge rounded-pill mb-3"
                    style="background-color: #d0e5ce; color: #214e34;">
                    Sustainable Living
                </span>

                <h1 class="display-5 fw-bold text-green">
                    Pilihan Kecil untuk
                    <br>Bumi yang Lebih Baik
                </h1>

                <p class="lead text-secondary mt-3">
                    Temukan berbagai produk ramah lingkungan yang membantu
                    kamu menjalani gaya hidup lebih bijak, sehat, dan berkelanjutan.
                </p>

                <a href="{{ route('products.index') }}"
                    class="btn btn-green btn-lg mt-2">
                    Jelajahi Produk Kami
                </a>
            </div>

            <div class="col-lg-5 text-center mt-4 mt-lg-0">
                <img
                    src="{{ asset('assets/images/home.jpg') }}"
                    alt="Tas belanja ramah lingkungan GreenGoods"
                    class="img-fluid rounded-4 shadow-sm"
                    style="width: 100%; max-height: 320px; object-fit: cover;"
                    onerror="this.style.display='none'">
            </div>
        </div>
    </section>


    {{-- KEUNGGULAN GREENGOODS --}}
    <section class="text-center mb-5">
        <h2 class="fw-bold text-green">
            Kenapa Harus Pilih GreenGoods?
        </h2>

        <p class="text-secondary">
            Langkah sederhana untuk mendukung kebiasaan yang lebih ramah lingkungan.
        </p>

        <div class="row g-4 mt-3">

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-3">
                    <div class="fs-1">🌱</div>

                    <h5 class="fw-bold mt-2">
                        Lebih Ramah Lingkungan
                    </h5>

                    <p class="text-secondary mb-0">
                        Produk dengan material yang mendukung gaya hidup berkelanjutan.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-3">
                    <div class="fs-1">♻️</div>

                    <h5 class="fw-bold mt-2">
                        Pilihan Berkelanjutan
                    </h5>

                    <p class="text-secondary mb-0">
                        Pilihan produk yang dapat membantu mengurangi penggunaan
                        barang sekali pakai.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-3">
                    <div class="fs-1">🛍️</div>

                    <h5 class="fw-bold mt-2">
                        Mudah Dieksplorasi
                    </h5>

                    <p class="text-secondary mb-0">
                        Lihat deskripsi, bahan, harga, dan rating setiap produk
                        dalam satu tempat.
                    </p>
                </div>
            </div>

        </div>
    </section>


    {{-- PRODUK PILIHAN --}}
    <section class="mb-5">
        <div class="row align-items-center g-4">

            <div class="col-md-5">
                <img
                    src="{{ asset('assets/images/home2.jpeg') }}"
                    alt="Sikat gigi berbahan bambu"
                    class="img-fluid rounded-4 shadow-sm w-100"
                    style="height: 300px; object-fit: cover;"
                    onerror="this.style.display='none'">
            </div>

            <div class="col-md-7">
                <span class="badge rounded-pill mb-3"
                    style="background-color: #d0e5ce; color: #214e34;">
                    Better Everyday Choices
                </span>

                <h2 class="fw-bold text-green">
                    Kebiasaan Baik Dimulai dari Hal Sederhana
                </h2>

                <p class="text-secondary mt-3">
                    Mulai langkah kecil untuk mengurangi penggunaan barang sekali pakai
                    dengan memilih produk yang dapat digunakan kembali dan memiliki
                    material yang lebih ramah lingkungan.
                </p>

            </div>

        </div>
    </section>

</div>
@endsection