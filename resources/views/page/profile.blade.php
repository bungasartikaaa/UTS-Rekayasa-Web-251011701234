@extends('layouts.app')

@section('title', 'Profil GreenGoods')

@section('content')
<div class="container py-5">

    {{-- Hero Profile --}}
    <section class="rounded-4 mb-5 overflow-hidden"
        style="background: linear-gradient(135deg, #e3efdf, #f7f9f5);">

        <div class="row align-items-center g-0">
            <div class="col-md-6 p-4 p-lg-5">

                <span class="badge rounded-pill mb-3"
                    style="background-color: #d0e5ce; color: #214e34;">
                    ABOUT GREENGOODS
                </span>

                <h1 class="display-5 fw-bold text-green">
                    Mengenal GreenGoods
                </h1>

                <p class="lead text-secondary mt-3">
                    GreenGoods adalah katalog produk ramah lingkungan yang
                    membantu masyarakat mengenal berbagai alternatif produk
                    untuk mendukung gaya hidup yang lebih berkelanjutan dan sehat.
                </p>

            </div>

            <div class="col-md-6">
                <img
                    src="{{ asset('assets/images/profile.jpeg') }}"
                    alt="Produk ramah lingkungan GreenGoods"
                    class="w-100"
                    style="height: 380px; object-fit: cover;"
                    onerror="this.onerror=null; this.src='https://placehold.co/800x600/e3efdf/214e34?text=GreenGoods';">
            </div>
        </div>
    </section>

    {{-- Visi dan Misi --}}
    <div class="row g-4 mb-5">

        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
                <div class="fs-1 mb-2">🌱</div>

                <h3 class="fw-bold text-green">Visi Kami</h3>

                <p class="text-secondary mb-0" style="line-height: 1.8;">
                    Mendorong kebiasaan hidup yang lebih peduli terhadap
                    lingkungan melalui informasi dan pengenalan produk
                    ramah lingkungan.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
                <div class="fs-1 mb-2">♻️</div>

                <h3 class="fw-bold text-green">Misi Kami</h3>

                <p class="text-secondary mb-0" style="line-height: 1.8;">
                    Menyediakan katalog yang informatif agar pengunjung
                    dapat melihat bahan, harga, deskripsi, dan rating
                    produk sebelum menentukan pilihan.
                </p>
            </div>
        </div>

    </div>

    {{-- Tentang Produk --}}
    <section class="mb-5">
        <div class="row align-items-center g-4">

            <div class="col-md-5">
                <img
                    src="{{ asset('assets/images/profile2.jpeg') }}"
                    alt="Pilihan produk ramah lingkungan"
                    class="img-fluid rounded-4 shadow-sm w-100"
                    style="height: 300px; object-fit: cover;"
                    onerror="this.onerror=null; this.src='https://placehold.co/700x500/e3efdf/214e34?text=Eco-Friendly+Products';">
            </div>

            <div class="col-md-7">
                <h2 class="fw-bold text-green mb-3">
                    Apa yang Kami Tawarkan?
                </h2>

                <p class="text-secondary" style="line-height: 1.8;">
                    GreenGoods menampilkan berbagai pilihan produk seperti
                    perlengkapan berbahan bambu, tas yang dapat digunakan
                    kembali, alat makan, dan produk lain yang mendukung
                    kebiasaan lebih ramah lingkungan.
                </p>

                <p class="text-secondary" style="line-height: 1.8;">
                    Setiap produk dilengkapi informasi untuk membantu
                    pengunjung mengenal karakteristiknya sebelum menentukan
                    pilihan.
                </p>

                <a href="{{ route('products.index') }}"
                    class="btn btn-green mt-2">
                    Lihat Semua Produk
                </a>
            </div>

        </div>
    </section>

</div>
@endsection