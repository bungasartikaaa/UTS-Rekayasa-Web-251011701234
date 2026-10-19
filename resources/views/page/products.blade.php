@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
<div class="container py-5">

    <div class="text-center mb-4">
        <span class="badge rounded-pill mb-2"
            style="background-color: #dcebd9; color: #214e34;">
            GREEN LIVING COLLECTION
        </span>

        <h1 class="fw-bold text-green">Katalog Produk</h1>

        <p class="text-secondary">
            Temukan produk pilihan untuk gaya hidup yang lebih ramah lingkungan untuk menyelamatkan bumi.
        </p>
    </div>

    {{-- Search Produk --}}
    <form action="{{ route('products.index') }}" method="GET" class="mb-4">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="input-group shadow-sm">
                    <input
                        type="search"
                        name="search"
                        class="form-control"
                        placeholder="Cari nama produk, material..."
                        value="{{ $search ?? request('search') }}"
                        aria-label="Cari produk">

                    <button type="submit" class="btn btn-green">
                        Cari
                    </button>
                </div>
            </div>
        </div>
    </form>

    {{-- Informasi Hasil Pencarian --}}
    @if (request('search'))
        <div class="d-flex justify-content-between align-items-center mb-4">
            <p class="text-secondary mb-0">
                Hasil pencarian:
                <strong>{{ request('search') }}</strong>
                ({{ $products->total() }} produk)
            </p>

            <a href="{{ route('products.index') }}"
                class="btn btn-outline-secondary btn-sm">
                Reset
            </a>
        </div>
    @endif

    {{-- Daftar Produk --}}
    <div class="row g-4">
        @forelse ($products as $product)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                    <img
                        src="{{ asset('assets/images/' . $product->image) }}"
                        alt="{{ $product->name }}"
                        class="card-img-top"
                        style="height: 240px; object-fit: cover;"
                        onerror="this.onerror=null; this.src='https://placehold.co/600x400/e3efdf/214e34?text=GreenGoods';">

                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start gap-2 mb-2">
                            <h5 class="card-title fw-bold mb-0">
                                {{ $product->name }}
                            </h5>

                            <span class="badge rounded-pill"
                                style="background-color: #e3efdf; color: #214e34;">
                                ★ {{ number_format($product->eco_rating, 1) }}
                            </span>
                        </div>

                        <p class="text-secondary small mb-2">
                            Material: {{ $product->material }}
                        </p>

                        <p class="text-secondary">
                            {{ \Illuminate\Support\Str::limit($product->description, 90) }}
                        </p>

                        <div class="mt-auto">
                            <h5 class="fw-bold text-green mb-3">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </h5>

                            <a href="{{ route('products.show', $product->id) }}"
                                class="btn btn-green w-100">
                                Lihat Detail
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <h5>Produk tidak ditemukan.</h5>
                <p class="text-secondary">
                    Coba gunakan kata kunci lain.
                </p>

                <a href="{{ route('products.index') }}" class="btn btn-green">
                    Tampilkan Semua Produk
                </a>
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    @if ($products->hasPages())
        <div class="d-flex justify-content-center mt-5">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    @endif

    @if ($products->total() > 0)
        <p class="text-secondary text-center mt-3 small">
            Menampilkan {{ $products->firstItem() }}–{{ $products->lastItem() }}
            dari {{ $products->total() }} produk
        </p>
    @endif

</div>
@endsection