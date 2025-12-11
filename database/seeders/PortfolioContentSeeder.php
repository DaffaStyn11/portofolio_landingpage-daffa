<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            // Hero Section
            ['section' => 'hero', 'key' => 'welcome_badge', 'value' => '👋 Welcome to my portfolio', 'type' => 'text', 'order' => 1],
            ['section' => 'hero', 'key' => 'name', 'value' => 'Daffa Setya', 'type' => 'text', 'order' => 2],
            ['section' => 'hero', 'key' => 'title', 'value' => 'Frontend Developer', 'type' => 'text', 'order' => 3],
            ['section' => 'hero', 'key' => 'description', 'value' => 'Membuat desain antarmuka intuitif, responsif, dan modern, serta membangun pengalaman web yang cepat dan elegan.', 'type' => 'textarea', 'order' => 4],
            ['section' => 'hero', 'key' => 'github_url', 'value' => 'https://github.com/DaffaStyn11', 'type' => 'text', 'order' => 5],
            ['section' => 'hero', 'key' => 'linkedin_url', 'value' => 'https://www.linkedin.com/in/daffa-setya-nugraha/', 'type' => 'text', 'order' => 6],
            ['section' => 'hero', 'key' => 'instagram_url', 'value' => 'https://www.instagram.com/daffastyn/', 'type' => 'text', 'order' => 7],

            // About Section
            ['section' => 'about', 'key' => 'title', 'value' => 'Tentang Saya', 'type' => 'text', 'order' => 1],
            ['section' => 'about', 'key' => 'description', 'value' => 'Saya Daffa Setya Nugraha, seorang pengembang frontend dan desainer UI/UX yang berfokus menciptakan antarmuka responsif, bersih, dan profesional. Saya memiliki passion yang besar dalam mengubah ide menjadi kenyataan digital yang fungsional dan estetis.', 'type' => 'textarea', 'order' => 2],
            ['section' => 'about', 'key' => 'years_experience', 'value' => '1', 'type' => 'text', 'order' => 3],
            ['section' => 'about', 'key' => 'projects_completed', 'value' => '10+', 'type' => 'text', 'order' => 4],
            ['section' => 'about', 'key' => 'image', 'value' => '/images/projects/fotoprofile.png', 'type' => 'image', 'order' => 5],

            // Skills Section
            ['section' => 'skills', 'key' => 'title', 'value' => 'Keahlian Saya', 'type' => 'text', 'order' => 1],
            ['section' => 'skills', 'key' => 'subtitle', 'value' => 'Teknologi dan tools yang saya gunakan untuk membangun aplikasi web berkualitas.', 'type' => 'text', 'order' => 2],

            // Experience Section
            ['section' => 'experience', 'key' => 'title', 'value' => 'Pengalaman Kerja', 'type' => 'text', 'order' => 1],
            ['section' => 'experience', 'key' => 'items', 'value' => json_encode([
                [
                    'position' => 'UI/UX & Frontend Internship',
                    'company' => 'Diskominfo Mojokerto',
                    'period' => 'Juli 2023 – September 2023',
                    'description' => 'Mengembangkan Sistem Permohonan Cuti dalam 2,5 bulan. Berkolaborasi dalam tim untuk merancang antarmuka pengguna (UI/UX) yang intuitif dan mengimplementasikannya ke dalam kode frontend yang responsif.',
                    'color' => 'blue'
                ],
                [
                    'position' => 'Freelance Web Developer',
                    'company' => 'Self Employed',
                    'period' => 'Mei 2025 – Sekarang',
                    'description' => 'Menyediakan jasa pembuatan website undangan digital dan landing page untuk UMKM. Fokus pada optimasi performa, SEO, dan desain yang menarik untuk meningkatkan konversi klien.',
                    'color' => 'purple'
                ]
            ]), 'type' => 'json', 'order' => 2],

            // Projects Section
            ['section' => 'projects', 'key' => 'title', 'value' => 'Project Terbaru', 'type' => 'text', 'order' => 1],
            ['section' => 'projects', 'key' => 'subtitle', 'value' => 'Beberapa hasil karya terbaik saya.', 'type' => 'text', 'order' => 2],
            ['section' => 'projects', 'key' => 'items', 'value' => json_encode([
                [
                    'title' => 'Sistem Permohonan Cuti',
                    'description' => 'Aplikasi web untuk manajemen cuti pegawai dengan fitur approval berjenjang dan notifikasi realtime.',
                    'image' => 'https://dummyimage.com/600x400/e5e5e5/000',
                    'technologies' => ['Nuxt', 'Vue', 'MySQL', 'Github', 'Rest API', 'PHP', 'Laravel Blade'],
                    'visible' => true
                ],
                [
                    'title' => 'Landing Page Coffee',
                    'description' => 'Desain landing page modern untuk kedai kopi dengan tema dark mode yang elegan dan animasi interaktif.',
                    'image' => '/images/projects/CoffeeShop.png',
                    'technologies' => ['HTML', 'JavaScript', 'Laravel Blade', 'Tailwind'],
                    'visible' => true
                ],
                [
                    'title' => 'Web Undangan Digital',
                    'description' => 'Platform pembuatan undangan digital berbasis web dengan berbagai pilihan tema dan fitur RSVP.',
                    'image' => 'https://dummyimage.com/600x400/e5e5e5/000',
                    'technologies' => ['WordPress', 'Hostinger'],
                    'visible' => true
                ]
            ]), 'type' => 'json', 'order' => 3],

            // Certificates Section
            ['section' => 'certificates', 'key' => 'title', 'value' => 'Sertifikat & Penghargaan', 'type' => 'text', 'order' => 1],
            ['section' => 'certificates', 'key' => 'items', 'value' => json_encode([
                [
                    'name' => 'Hitaclass – Frontend Web Developer',
                    'year' => '2025',
                    'level' => 'Basic',
                    'color' => 'blue'
                ],
                [
                    'name' => 'MySkill – Figma UI/UX Web Design',
                    'year' => '2025',
                    'level' => 'Basic',
                    'color' => 'purple'
                ],
                [
                    'name' => 'MySkill – Backend',
                    'year' => '2025',
                    'level' => 'Basic',
                    'color' => 'green'
                ],
                [
                    'name' => 'RevoU – Software Engineer',
                    'year' => '2025',
                    'level' => 'Basic',
                    'color' => 'blue'
                ],
                [
                    'name' => 'RevoU – Data Analysis',
                    'year' => '2025',
                    'level' => 'Basic',
                    'color' => 'purple'
                ],
                [
                    'name' => 'Dicoding – Financial Literacy',
                    'year' => '2025',
                    'level' => 'Basic',
                    'color' => 'green'
                ],
                [
                    'name' => 'RevoU – Digital Marketing',
                    'year' => '2025',
                    'level' => 'Basic',
                    'color' => 'blue'
                ]
            ]), 'type' => 'json', 'order' => 2],
        ];

        foreach ($contents as $content) {
            \App\Models\PortfolioContent::create($content);
        }
    }
}
