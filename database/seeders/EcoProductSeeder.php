<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EcoProduct;

class EcoProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
    [
        'name' => 'Premium Bamboo Toothbrush Set',
        'material' => 'Bambu Organik',
        'price' => 85000,
        'eco_rating' => 4.8,
        'image' => 'sikatgigi.jpeg',
        'description' => 'Set sikat gigi premium berbahan bambu dengan desain elegan sebagai alternatif sikat gigi plastik.'
    ],
    [
        'name' => 'Insulated Eco Tumbler',
        'material' => 'Stainless Steel 304',
        'price' => 285000,
        'eco_rating' => 4.9,
        'image' => 'tumbler.jpeg',
        'description' => 'Tumbler premium dengan material stainless steel yang dirancang untuk penggunaan jangka panjang.'
    ],
    [
        'name' => 'Organic Cotton Tote Bag',
        'material' => 'Katun Organik',
        'price' => 175000,
        'eco_rating' => 4.7,
        'image' => 'totebag.jpeg',
        'description' => 'Tas premium berbahan katun organik untuk aktivitas sehari-hari dan belanja.'
    ],
    [
        'name' => 'Premium Stainless Straw Set',
        'material' => 'Stainless Steel',
        'price' => 95000,
        'eco_rating' => 4.6,
        'image' => 'sedotan.jpeg',
        'description' => 'Set sedotan stainless steel yang dapat digunakan berulang kali, lengkap dengan aksesori pembersih.'
    ],
    [
        'name' => 'Luxury Bamboo Cutlery Set',
        'material' => 'Bambu Pilihan',
        'price' => 145000,
        'eco_rating' => 4.7,
        'image' => 'set.jpeg',
        'description' => 'Set peralatan makan berbahan bambu dengan desain minimalis dan kemasan praktis.'
    ],
    [
        'name' => 'Botanical Natural Soap Collection',
        'material' => 'Minyak Nabati dan Ekstrak Tumbuhan',
        'price' => 125000,
        'eco_rating' => 4.5,
        'image' => 'soap.jpeg',
        'description' => 'Paket sabun berbahan dasar minyak nabati dengan pilihan aroma alami.'
    ],
    [
        'name' => 'Premium Lunchbox with Recycled Fiber',
        'material' => 'Serat Daur Ulang',
        'price' => 115000,
        'eco_rating' => 4.6,
        'image' => 'lunchbox.jpeg',
        'description' => 'Lunchbox premium dengan material serat daur ulang yang dirancang untuk penggunaan jangka panjang.'
    ],
    [
        'name' => 'Artisan Beeswax Wrap Set',
        'material' => 'Katun dan Lilin Lebah',
        'price' => 135000,
        'eco_rating' => 4.8,
        'image' => 'shoping.jpeg',
        'description' => 'Set pembungkus makanan yang dapat digunakan kembali sebagai alternatif plastik pembungkus.'
    ],
    [
        'name' => 'Handcrafted Coconut Bowl Set',
        'material' => 'Tempurung Kelapa',
        'price' => 195000,
        'eco_rating' => 4.7,
        'image' => 'bowl.jpeg',
        'description' => 'Set mangkuk hasil kerajinan dari tempurung kelapa dengan tampilan natural dan unik.'
    ],
    [
        'name' => 'Eco Premium Recycled Notebook Set',
        'material' => 'Kertas Daur Ulang',
        'price' => 105000,
        'eco_rating' => 4.6,
        'image' => 'notebook.jpeg',
        'description' => 'Set buku catatan premium berbahan kertas daur ulang untuk kebutuhan belajar dan bekerja.'
    ],
];

        foreach ($products as $product) {
            EcoProduct::create($product);
        }
    }
}