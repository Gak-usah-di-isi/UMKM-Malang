<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil user IDs yang tersedia (asumsi ada users)
        $userIds = DB::table('users')->pluck('id')->toArray();

        // Ambil category IDs yang tersedia
        $categoryIds = DB::table('article_categories')->pluck('id')->toArray();

        if (empty($userIds) || empty($categoryIds)) {
            $this->command->warn('Make sure you have users and article_categories data before running this seeder.');
            return;
        }

        $articles = [
            [
                'title' => 'The Future of Artificial Intelligence',
                'content' => 'Artificial Intelligence is rapidly evolving and transforming various industries. From machine learning algorithms to neural networks, AI is becoming an integral part of our daily lives. This article explores the current trends and future possibilities of AI technology, discussing both the opportunities and challenges that lie ahead.',
            ],
            [
                'title' => 'Digital Marketing Strategies for Small Businesses',
                'content' => 'Small businesses need effective digital marketing strategies to compete in today\'s market. This comprehensive guide covers social media marketing, content marketing, SEO optimization, and email campaigns. Learn how to maximize your online presence and reach your target audience effectively.',
            ],
            [
                'title' => '10 Healthy Habits for Better Living',
                'content' => 'Living a healthy lifestyle doesn\'t have to be complicated. This article outlines ten simple yet effective habits that can significantly improve your physical and mental well-being. From proper nutrition to regular exercise and stress management, discover practical tips for a healthier you.',
            ],
            [
                'title' => 'Remote Work Best Practices',
                'content' => 'Working from home has become the new normal for many professionals. This article provides essential tips and strategies for maintaining productivity, work-life balance, and effective communication while working remotely. Learn how to create an optimal home office environment.',
            ],
            [
                'title' => 'Sustainable Living: Simple Steps to Go Green',
                'content' => 'Environmental consciousness is more important than ever. This guide provides practical steps for adopting a more sustainable lifestyle, from reducing waste and conserving energy to making eco-friendly purchasing decisions. Small changes can make a big difference.',
            ],
            [
                'title' => 'The Rise of Cryptocurrency and Blockchain',
                'content' => 'Cryptocurrency and blockchain technology are revolutionizing the financial landscape. This article explores the fundamentals of digital currencies, their potential impact on traditional banking, and what the future holds for decentralized finance.',
            ],
            [
                'title' => 'Mental Health Awareness in the Digital Age',
                'content' => 'The digital age has brought new challenges to mental health. Social media, constant connectivity, and information overload can affect our psychological well-being. This article discusses strategies for maintaining mental health in our hyper-connected world.',
            ],
            [
                'title' => 'Cloud Computing for Beginners',
                'content' => 'Cloud computing has transformed how businesses operate and store data. This beginner\'s guide explains the basics of cloud services, different deployment models, and the benefits of moving to the cloud. Perfect for those new to cloud technology.',
            ],
            [
                'title' => 'The Art of Effective Communication',
                'content' => 'Communication is a vital skill in both personal and professional settings. This article covers techniques for improving your communication skills, including active listening, clear expression of ideas, and non-verbal communication. Master the art of connecting with others.',
            ],
            [
                'title' => 'Exploring Career Opportunities in Data Science',
                'content' => 'Data science is one of the fastest-growing fields in technology. This comprehensive overview explores various career paths in data science, required skills, educational requirements, and industry trends. Discover if a career in data science is right for you.',
            ]
        ];

        $now = Carbon::now();

        foreach ($articles as $index => $article) {
            $slug = Str::slug($article['title']);

            // Pastikan slug unik
            $originalSlug = $slug;
            $counter = 1;
            while (DB::table('articles')->where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }

            DB::table('articles')->insert([
                'user_id' => $userIds[array_rand($userIds)],
                'article_category_id' => $categoryIds[array_rand($categoryIds)],
                'title' => $article['title'],
                'slug' => $slug,
                'content' => $article['content'],
                'thumbnail' => 'thumbnails/article-' . ($index + 1) . '.jpg', // Contoh path thumbnail
                'created_at' => $now->copy()->subDays(rand(1, 30)),
                'updated_at' => $now->copy()->subDays(rand(1, 30)),
            ]);
        }

        $this->command->info('Articles seeded successfully!');
    }
}
