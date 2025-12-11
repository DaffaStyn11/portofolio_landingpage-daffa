<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Hero::create([
            'welcome_badge' => '👋 Welcome to my portfolio',
            'name' => 'Daffa Setya',
            'title' => 'Frontend Developer',
            'typing_titles' => [
                'Frontend Web Developer',
                'UI/UX Web Designer',
                'Backend Web Developer',
                'Fullstack Web Developer'
            ],
            'description' => 'Membuat desain antarmuka intuitif, responsif, dan modern, serta membangun pengalaman web yang cepat dan elegan.',
            'github_url' => 'https://github.com/DaffaStyn11',
            'linkedin_url' => 'https://www.linkedin.com/in/daffa-setya-nugraha/',
            'instagram_url' => 'https://www.instagram.com/daffastyn/',
            'order' => 1
        ]);
    }
}
