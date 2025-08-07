<?php

namespace Database\Seeders;

use App\Models\Umkm;
use App\Models\User;
use App\Models\UmkmCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil user dengan role 'umkm' menggunakan Laratrust
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'umkm');
        })->get();

        $categories = UmkmCategory::all();

        if ($users->isEmpty()) {
            // Jika belum ada user dengan role umkm, buat dulu
            $user = User::create([
                'name' => 'Contoh UMKM',
                'email' => 'umkm@example.com',
                'password' => bcrypt('password'),
            ]);

            // Assign role umkm
            $user->addRole('umkm');
            $users = collect([$user]);
        }

        if ($categories->isEmpty()) {
            $this->command->info('Seeder UMKM dilewati karena data kategori belum ada!');
            $this->command->info('Jalankan UmkmCategorySeeder terlebih dahulu!');
            return;
        }

        $umkms = [
            [
                'name' => 'Keripik Tempe Sanan',
                'description' => 'Produsen keripik tempe khas Malang dengan berbagai varian rasa',
                // ... data lainnya tetap sama
            ],
            // ... data UMKM lainnya
        ];

        foreach ($umkms as $umkmData) {
            $user = $users->random();
            $category = $categories->random();

            Umkm::create([
                'user_id' => $user->id,
                'umkm_category_id' => $category->id,
                'name' => $umkmData['name'],
                'slug' => Str::slug($umkmData['name']),
                // ... field lainnya
            ]);
        }

        $this->command->info('Berhasil menambahkan ' . count($umkms) . ' data UMKM!');
    }
}
