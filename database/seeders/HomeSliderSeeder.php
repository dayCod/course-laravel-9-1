<?php

namespace Database\Seeders;

use App\Models\HomeSlide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSlide::create([
            'title' => fake()->title(),
            'short_title' => fake()->text(20),
            'video_url' => fake()->url(),
        ]);
    }
}
