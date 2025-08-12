<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'title' => 'Laravel Developer Meetup',
                'slug' => 'laravel-developer-meetup',
                'content' => 'Join us for an exciting meetup where Laravel developers from all skill levels come together to share knowledge, network, and learn about the latest Laravel features and best practices.',
                'location' => 'Tech Hub Jakarta, Kuningan',
                'organizer' => 'Jakarta Laravel Community',
                'start_time' => Carbon::now()->addDays(7)->setTime(19, 0),
                'end_time' => Carbon::now()->addDays(7)->setTime(21, 30),
                'thumbnail' => 'thumbnails/laravel-meetup.jpg',
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Web Development Workshop',
                'slug' => 'web-development-workshop',
                'content' => 'A comprehensive 2-day workshop covering modern web development techniques including HTML5, CSS3, JavaScript ES6+, and responsive design principles.',
                'location' => 'Universitas Indonesia, Depok',
                'organizer' => 'UI Tech Community',
                'start_time' => Carbon::now()->addDays(14)->setTime(9, 0),
                'end_time' => Carbon::now()->addDays(15)->setTime(17, 0),
                'thumbnail' => 'thumbnails/web-workshop.jpg',
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Startup Pitch Competition',
                'slug' => 'startup-pitch-competition',
                'content' => 'Present your innovative startup ideas to a panel of expert judges and compete for funding opportunities. Open to all tech entrepreneurs and aspiring founders.',
                'location' => 'Balai Kartini, Jakarta Selatan',
                'organizer' => 'Indonesia Startup Ecosystem',
                'start_time' => Carbon::now()->addDays(21)->setTime(13, 0),
                'end_time' => Carbon::now()->addDays(21)->setTime(18, 0),
                'thumbnail' => null,
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'AI & Machine Learning Conference',
                'slug' => 'ai-machine-learning-conference',
                'content' => 'Explore the latest trends in Artificial Intelligence and Machine Learning with industry experts. Topics include deep learning, neural networks, and practical AI applications.',
                'location' => 'Grand Indonesia Convention Center',
                'organizer' => 'AI Indonesia Society',
                'start_time' => Carbon::now()->addDays(30)->setTime(8, 30),
                'end_time' => Carbon::now()->addDays(30)->setTime(17, 30),
                'thumbnail' => 'thumbnails/ai-conference.jpg',
                'status' => 'draft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Mobile App Development Bootcamp',
                'slug' => 'mobile-app-development-bootcamp',
                'content' => 'Intensive 3-day bootcamp focusing on cross-platform mobile app development using React Native and Flutter. Hands-on projects and expert mentoring included.',
                'location' => 'Binus University, Jakarta Barat',
                'organizer' => 'Mobile Dev Indonesia',
                'start_time' => Carbon::now()->addDays(45)->setTime(9, 0),
                'end_time' => Carbon::now()->addDays(47)->setTime(17, 0),
                'thumbnail' => 'thumbnails/mobile-bootcamp.jpg',
                'status' => 'published',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}