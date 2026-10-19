@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<div class="container py-5">

    <a href="{{ route('products.index') }}"
        class="btn btn-outline-success mb-4">
        &larr; Kembali ke Katalog
    </a>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="row g-0">

            <div class="col-md-6">
                <img
                    src="{{ asset('assets/images/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="w-100 h-100"
                    style="height: 400px; object-fit: cover;"
                    onerror="this.onerror=null; this.src='https://placehold.co/700x700/e3efdf/214e34?text=GreenGoods';">
            </div>

            <div class="col-md-6">
                <div class="card-body p-4 p-lg-5">

                    <span class="badge rounded-pill mb-3"
                        style="background-color: #e3efdf; color: #214e34;">
                        Eco-Friendly Product
                    </span>

                    <h1 class="fw-bold text-green mb-3">
                        {{ $product->name }}
                    </h1>

                    <h3 class="fw-bold text-green mb-4">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </h3>

                    <hr>

                    <div class="mb-3">
                        <h6 class="fw-bold">Material Produk</h6>
                        <p class="text-secondary">
                            {{ $product->material }}
                        </p>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-bold">Eco Rating</h6>
                        <span class="badge rounded-pill fs-6"
                            style="background-color: #e3efdf; color: #214e34;">
                            ★ {{ number_format($product->eco_rating, 1) }} / 5.0
                        </span>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold">Deskripsi Produk</h6>
                        <p class="text-secondary" style="line-height: 1.8;">
                            {{ $product->description }}
                        </p>
                    </div>

                    <a href="{{ route('products.index') }}"
                        class="btn btn-green w-100">
                        Lihat Produk Lainnya
                    </a>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection