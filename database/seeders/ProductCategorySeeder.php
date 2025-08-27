<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create([
            'name' => 'Elektronik',
            'slug' => 'elektronik',
            'description' => 'Perangkat dan gadget termasuk ponsel, laptop, dan aksesoris.',
        ]);

        ProductCategory::create([
            'name' => 'Pakaian',
            'slug' => 'pakaian',
            'description' => 'Pakaian termasuk kaos, celana, gaun, dan aksesoris.',
        ]);

        ProductCategory::create([
            'name' => 'Rumah & Dapur',
            'slug' => 'rumah-dapur',
            'description' => 'Produk untuk rumah dan dapur, termasuk furnitur dan peralatan dapur.',
        ]);

        ProductCategory::create([
            'name' => 'Olahraga',
            'slug' => 'olahraga',
            'description' => 'Peralatan olahraga dan perlengkapan untuk kebugaran serta aktivitas luar ruangan.',
        ]);

        ProductCategory::create([
            'name' => 'Buku',
            'slug' => 'buku',
            'description' => 'Berbagai buku termasuk fiksi, non-fiksi, dan edukasi.',
        ]);
    }
}
