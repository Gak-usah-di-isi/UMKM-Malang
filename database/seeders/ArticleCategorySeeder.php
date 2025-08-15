<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'Articles about latest technology trends, software development, and digital innovation.',
            ],
            [
                'name' => 'Business',
                'slug' => 'business',
                'description' => 'Business strategies, entrepreneurship, and industry insights.',
            ],
            [
                'name' => 'Health & Wellness',
                'slug' => 'health-wellness',
                'description' => 'Health tips, wellness advice, and medical information.',
            ],
            [
                'name' => 'Lifestyle',
                'slug' => 'lifestyle',
                'description' => 'Lifestyle tips, travel, fashion, and personal development.',
            ],
            [
                'name' => 'Education',
                'slug' => 'education',
                'description' => 'Educational content, learning resources, and academic insights.',
            ],
            [
                'name' => 'Sports',
                'slug' => 'sports',
                'description' => 'Sports news, analysis, and athletic performance.',
            ],
            [
                'name' => 'Entertainment',
                'slug' => 'entertainment',
                'description' => 'Movies, music, games, and celebrity news.',
            ],
            [
                'name' => 'Science',
                'slug' => 'science',
                'description' => 'Scientific discoveries, research, and innovations.',
            ],
            [
                'name' => 'Politics',
                'slug' => 'politics',
                'description' => 'Political news, analysis, and government updates.',
            ],
            [
                'name' => 'Food & Cooking',
                'slug' => 'food-cooking',
                'description' => 'Recipes, cooking tips, and culinary experiences.',
            ]
        ];

        $now = Carbon::now();

        foreach ($categories as $category) {

            DB::table('article_categories')->updateOrInsert(
                ['slug' => $category['slug']],
                [
                    'name' => $category['name'],
                    'slug' => $category['slug'],
                    'description' => $category['description'],
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }

        $this->command->info('Article categories seeded successfully!');
    }
}
