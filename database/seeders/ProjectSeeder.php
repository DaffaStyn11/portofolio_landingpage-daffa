<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistem Permohonan Cuti',
                'description' => 'Aplikasi web untuk manajemen cuti pegawai dengan fitur approval berjenjang dan notifikasi realtime.',
                'image' => 'https://dummyimage.com/600x400/e5e5e5/000',
                'technologies' => ['Nuxt', 'Vue', 'MySQL', 'Github', 'Rest API', 'PHP', 'Laravel Blade'],
                'visible' => true,
                'order' => 1
            ],
            [
                'title' => 'Landing Page Coffee',
                'description' => 'Desain landing page modern untuk kedai kopi dengan tema dark mode yang elegan dan animasi interaktif.',
                'image' => '/images/projects/CoffeeShop.png',
                'technologies' => ['HTML', 'JavaScript', 'Laravel Blade', 'Tailwind'],
                'visible' => true,
                'order' => 2
            ],
            [
                'title' => 'Web Undangan Digital',
                'description' => 'Platform pembuatan undangan digital berbasis web dengan berbagai pilihan tema dan fitur RSVP.',
                'image' => 'https://dummyimage.com/600x400/e5e5e5/000',
                'technologies' => ['WordPress', 'Hostinger'],
                'visible' => true,
                'order' => 3
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
