<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Elektronik',
                'slug' => 'elektronik',
                'description' => 'Kategori untuk produk elektronik',
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'description' => 'Kategori untuk produk fashion',
            ],
            [
                'name' => 'Makanan',
                'slug' => 'makanan',
                'description' => 'Kategori untuk produk makanan',
            ],
            [
                'name' => 'Kesehatan',
                'slug' => 'kesehatan',
                'description' => 'Kategori untuk produk kesehatan',
            ],
            [
                'name' => 'Olahraga',
                'slug' => 'olahraga',
                'description' => 'Kategori untuk produk olahraga',
            ]
        ];

        foreach ($categories as $category) {
            ProductCategory::create($category);
        }
    }
}
