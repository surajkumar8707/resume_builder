<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Setting::truncate();

        // Seed new data
        Setting::create([
            'app_name' => 'App Name',
            'email' => 'admin@gmail.com',
            'whatsapp' => '+91 8707633860',
            'contact' => '+91 8707633860',
            'address' => 'This is Address',
            'header_image' => "assets/front/images/header/header.jpg",
            'is_fresh' => 1,
        ]);
    }
}
