<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        $certificates = [
            ['name' => 'Hitaclass – Frontend Web Developer', 'year' => '2025', 'level' => 'Basic', 'color' => 'blue', 'order' => 1],
            ['name' => 'MySkill – Figma UI/UX Web Design', 'year' => '2025', 'level' => 'Basic', 'color' => 'purple', 'order' => 2],
            ['name' => 'MySkill – Backend', 'year' => '2025', 'level' => 'Basic', 'color' => 'green', 'order' => 3],
            ['name' => 'RevoU – Software Engineer', 'year' => '2025', 'level' => 'Basic', 'color' => 'blue', 'order' => 4],
            ['name' => 'RevoU – Data Analysis', 'year' => '2025', 'level' => 'Basic', 'color' => 'purple', 'order' => 5],
            ['name' => 'Dicoding – Financial Literacy', 'year' => '2025', 'level' => 'Basic', 'color' => 'green', 'order' => 6],
            ['name' => 'RevoU – Digital Marketing', 'year' => '2025', 'level' => 'Basic', 'color' => 'blue', 'order' => 7]
        ];

        foreach ($certificates as $certificate) {
            Certificate::create($certificate);
        }
    }
}
