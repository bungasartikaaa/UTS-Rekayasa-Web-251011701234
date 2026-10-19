@extends('layouts.app')

@section('title', 'Contact GreenGoods')

@section('content')
<div class="container py-5">

    {{-- HEADER --}}
    <section class="rounded-4 p-4 p-md-5 mb-5"
        style="background: linear-gradient(135deg, #e3efdf, #f7f9f5);">

        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge rounded-pill mb-3"
                    style="background-color: #d0e5ce; color: #214e34;">
                    CONTACT US
                </span>

                <h1 class="display-5 fw-bold text-green">
                    Hubungi GreenGoods
                </h1>

                <p class="lead text-secondary mt-3">
                    Kami terbuka untuk pertanyaan, saran, dan masukan mengenai
                    produk ramah lingkungan. Bersama-sama, kita bisa memulai
                    kebiasaan yang lebih baik untuk bumi.
                </p>

            </div>

            <div class="col-lg-5">
                <img
                    src="{{ asset('assets/images/contact3.jpeg') }}"
                    alt="Produk ramah lingkungan GreenGoods"
                    class="img-fluid rounded-4 shadow-sm w-100"
                    style="height: 280px; object-fit: cover;"
                    onerror="this.style.display='none'">
            </div>
        </div>
    </section>


    {{-- INFORMASI KONTAK --}}
    <section class="mb-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-green">Informasi Kontak</h2>
            <p class="text-secondary">
                Informasi seputar GreenGoods dan layanan katalog kami.
            </p>
        </div>

        <div class="row justify-content-center g-4">

            <div class="col-md-5">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100 text-center">
                    <div class="fs-1 mb-3">✉️</div>

                    <h5 class="fw-bold text-green">Email</h5>

                    <p class="text-secondary mb-0">
                        greengoods@example.com
                    </p>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100 text-center">
                    <div class="fs-1 mb-3">🌱</div>

                    <h5 class="fw-bold text-green">Tentang Layanan</h5>

                    <p class="text-secondary mb-0">
                        GreenGoods menyediakan informasi produk ramah lingkungan
                        untuk membantu pengunjung mengenal pilihan yang lebih
                        berkelanjutan.
                    </p>
                </div>
            </div>

        </div>
    </section>


    {{-- GAMBAR PENDUKUNG --}}
    <section class="mb-5">
        <div class="row align-items-center g-4">

            <div class="col-md-6">
                <img
                    src="{{ asset('assets/images/contact.jpeg') }}"
                    alt="Tumbler yang dapat digunakan kembali"
                    class="img-fluid rounded-4 shadow-sm w-100"
                    style="height: 300px; object-fit: cover;"
                    onerror="this.style.display='none'">
            </div>

            <div class="col-md-6">
                <h2 class="fw-bold text-green">
                    Bersama Menuju Gaya Hidup Berkelanjutan
                </h2>

                <p class="text-secondary mt-3">
                    Memilih produk yang dapat digunakan kembali merupakan salah
                    satu langkah sederhana untuk mengurangi sampah. GreenGoods
                    hadir untuk membantu kamu mengenal berbagai alternatif
                    produk ramah lingkungan.
                </p>
            </div>

        </div>
    </section>

</div>
@endsection