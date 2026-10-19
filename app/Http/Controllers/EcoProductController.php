<?php

namespace App\Http\Controllers;

use App\Models\EcoProduct;

class EcoProductController extends Controller
{
    public function index()
{
    $search = request('search');

    $products = EcoProduct::query()
        ->when($search, function ($query, $search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                ->orWhere('material', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
            });
        })
        ->orderBy('id', 'asc')
        ->paginate(6)
        ->withQueryString();

    return view('page.products', compact('products', 'search'));
}

    public function show($id)
{
    $product = EcoProduct::findOrFail($id);

    return view('page.product-detail', compact('product'));
}
}