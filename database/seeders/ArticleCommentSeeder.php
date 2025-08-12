<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleCommentSeeder extends Seeder
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

        $comments = [
            'Great article! Very informative and well-written.',
            'Thanks for sharing this valuable information.',
            'I learned a lot from this post. Keep up the good work!',
            'Interesting perspective on this topic.',
            'This is exactly what I was looking for. Thank you!',
            'Well researched and clearly explained.',
            'Could you elaborate more on this point?',
            'I disagree with some points, but overall a good read.',
            'Excellent insights! Looking forward to more content like this.',
            'This helped me understand the topic better.',
            'Very practical advice. I\'ll definitely try implementing these tips.',
            'Love the detailed explanation. Very helpful!',
            'Great examples used throughout the article.',
            'This article answered all my questions about this topic.',
            'Well structured and easy to follow.',
            'I appreciate the time you took to write this comprehensive guide.',
            'Bookmarking this for future reference!',
            'Clear and concise explanation. Thank you!',
            'This topic is very relevant in today\'s context.',
            'Great job on covering all the important aspects.',
        ];

        $now = Carbon::now();

        // Generate random comments untuk setiap article
        foreach ($articleIds as $articleId) {
            $numComments = rand(3, 8); // Random 3-8 comments per article

            for ($i = 0; $i < $numComments; $i++) {
                DB::table('article_comments')->insert([
                    'article_id' => $articleId,
                    'user_id' => $userIds[array_rand($userIds)],
                    'content' => $comments[array_rand($comments)],
                    'created_at' => $now->copy()->subDays(rand(1, 30))->subHours(rand(1, 23)),
                    'updated_at' => $now->copy()->subDays(rand(1, 30))->subHours(rand(1, 23)),
                ]);
            }
        }

        $this->command->info('Article comments seeded successfully!');
    }
}
