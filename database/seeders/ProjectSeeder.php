<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\Skill;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            [
                'title' => 'Website Toko Kue',
                'description' => 'Aplikasi PHP MVC dengan login multi-role, manajemen produk, restock, dan database MySQL.',
                'created_at' => now(),
            ],
            [
                'title' => 'Website Art Market',
                'description' => 'Marketplace karya seni dengan sistem transaksi,landing page modern, dan UI eksklusif.',
                'created_at' => now(),
            ],
        ]);

        Skill::create([
            ['title' => 'PHP Native & MVC'],
            ['title' => 'Python'],
            ['title' => 'HTML & CSS'],
            ['title' => 'JavaScript'],
            ['title' => 'SQL'],
        ]);
    }
}
