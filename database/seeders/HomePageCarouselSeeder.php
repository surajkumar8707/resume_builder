<?php

namespace Database\Seeders;

use App\Models\HomePageCarousel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomePageCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        HomePageCarousel::truncate();

        $default_carousels = array(
            [
                'title' => 'SKY',
                'image' => "assets/front/images/home_page_carousel/default/1.jpg",
                'status' => 1,
                'is_default' => 1,
            ],
            [
                'title' => 'Lake',
                'image' => "assets/front/images/home_page_carousel/default/2.jpg",
                'status' => 1,
                'is_default' => 1,
            ],
            [
                'title' => 'LANDCAPE',
                'image' => "assets/front/images/home_page_carousel/default/3.jpg",
                'status' => 1,
                'is_default' => 1,
            ],
            [
                'title' => 'SLIDE',
                'image' => "assets/front/images/home_page_carousel/default/4.jpg",
                'status' => 0,
                'is_default' => 1,
            ],

        );

        if (count($default_carousels) > 0) {
            foreach ($default_carousels as $carousel) {
                HomePageCarousel::create($carousel);
            }
        }
    }
}
