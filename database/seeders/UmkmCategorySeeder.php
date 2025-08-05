<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\UmkmCategory;

class UmkmCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Kuliner'],
            ['name' => 'Fashion'],
            ['name' => 'Aksesoris'],
            ['name' => 'Kerajinan'],
            ['name' => 'Jasa'],
            ['name' => 'Agrobisnis'],
            ['name' => 'Seni'],
        ];

        foreach ($categories as $category) {
            UmkmCategory::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => 'Kategori ' . $category['name'] . ' untuk UMKM di Malang',
            ]);
        }
    }
}
