<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleLikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil article IDs dan user IDs yang tersedia
        $articleIds = DB::table('articles')->pluck('id')->toArray();
        $userIds = DB::table('users')->pluck('id')->toArray();

        if (empty($articleIds) || empty($userIds)) {
            $this->command->warn('Make sure you have articles and users data before running this seeder.');
            return;
        }

        $now = Carbon::now();
        $likes = [];

        // Generate random likes untuk setiap article
        foreach ($articleIds as $articleId) {
            $numLikes = rand(5, 15); // Random 5-15 likes per article
            $shuffledUsers = $userIds;
            shuffle($shuffledUsers);

            // Ambil random users untuk like article ini (pastikan tidak ada duplikasi)
            $likingUsers = array_slice($shuffledUsers, 0, min($numLikes, count($userIds)));

            foreach ($likingUsers as $userId) {
                $likes[] = [
                    'article_id' => $articleId,
                    'user_id' => $userId,
                    'created_at' => $now->copy()->subDays(rand(1, 30))->subHours(rand(1, 23)),
                    'updated_at' => $now->copy()->subDays(rand(1, 30))->subHours(rand(1, 23)),
                ];
            }
        }

        // Insert dalam batch untuk performa yang lebih baik
        $chunks = array_chunk($likes, 100);
        foreach ($chunks as $chunk) {
            DB::table('article_likes')->insert($chunk);
        }

        $this->command->info('Article likes seeded successfully!');
    }
}
