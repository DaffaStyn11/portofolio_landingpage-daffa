<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\About::create([
            'title' => 'Tentang Saya',
            'description' => 'Saya Daffa Setya Nugraha, seorang pengembang frontend dan desainer UI/UX yang berfokus menciptakan antarmuka responsif, bersih, dan profesional. Saya memiliki passion yang besar dalam mengubah ide menjadi kenyataan digital yang fungsional dan estetis.',
            'years_experience' => '1',
            'projects_completed' => '10+',
            'image' => 'images/projects/fotoprofile.png',
            'order' => 1
        ]);
    }
}
