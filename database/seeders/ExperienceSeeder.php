<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $experiences = [
            [
                'position' => 'UI/UX & Frontend Internship',
                'company' => 'Diskominfo Mojokerto',
                'period' => 'Juli 2023 – September 2023',
                'description' => 'Mengembangkan Sistem Permohonan Cuti dalam 2,5 bulan. Berkolaborasi dalam tim untuk merancang antarmuka pengguna (UI/UX) yang intuitif dan mengimplementasikannya ke dalam kode frontend yang responsif.',
                'color' => 'blue',
                'order' => 1
            ],
            [
                'position' => 'Freelance Web Developer',
                'company' => 'Self Employed',
                'period' => 'Mei 2025 – Sekarang',
                'description' => 'Menyediakan jasa pembuatan website undangan digital dan landing page untuk UMKM. Fokus pada optimasi performa, SEO, dan desain yang menarik untuk meningkatkan konversi klien.',
                'color' => 'purple',
                'order' => 2
            ]
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
