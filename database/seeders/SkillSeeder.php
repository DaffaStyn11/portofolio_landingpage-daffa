<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            [
                'name' => 'Frontend Development',
                'description' => 'Membangun antarmuka web yang responsif dan interaktif menggunakan HTML, CSS, Tailwind, dan React/Vue.',
                'icon' => 'monitor',
                'color' => 'blue',
                'order' => 1
            ],
            [
                'name' => 'UI/UX Design',
                'description' => 'Merancang desain user-friendly dengan Figma, Wireframing, dan Prototyping yang fokus pada pengalaman pengguna.',
                'icon' => 'layout',
                'color' => 'purple',
                'order' => 2
            ],
            [
                'name' => 'Backend Basic',
                'description' => 'Memahami dasar backend dengan Laravel, integrasi REST API, dan perancangan database yang efisien.',
                'icon' => 'server',
                'color' => 'green',
                'order' => 3
            ],
            [
                'name' => 'AI Trouble Solving',
                'description' => 'Menggunakan AI untuk analisis masalah, optimasi workflow, dan penyelesaian masalah kompleks dengan pendekatan cerdas.',
                'icon' => 'cpu',
                'color' => 'yellow',
                'order' => 4
            ],
            [
                'name' => 'Git & GitHub',
                'description' => 'Mengelola version control menggunakan Git, kolaborasi melalui GitHub, branching workflow, dan deployment project.',
                'icon' => 'github',
                'color' => 'gray',
                'order' => 5
            ],
            [
                'name' => 'API Integration',
                'description' => 'Mengintegrasikan REST API, autentikasi token, dan pengelolaan data antar sistem secara aman dan efisien.',
                'icon' => 'link',
                'color' => 'red',
                'order' => 6
            ],
            [
                'name' => 'Database Design',
                'description' => 'Merancang struktur database yang optimal, relasional, dan scalable untuk kebutuhan aplikasi modern.',
                'icon' => 'database',
                'color' => 'indigo',
                'order' => 7
            ],
            [
                'name' => 'Problem Solving & Debugging',
                'description' => 'Menganalisis error, memperbaiki bug, dan mengoptimalkan kode agar aplikasi berjalan stabil dan efisien.',
                'icon' => 'alert-triangle',
                'color' => 'orange',
                'order' => 8
            ]
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
