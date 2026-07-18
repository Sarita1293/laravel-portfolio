<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQ;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FAQ::create([
            'question' => 'What technologies do you specialize in?',
            'answer' => 'I specialize in PHP, Laravel, APIs, MySQL for backend development, and jQuery, HTML, CSS, and Bootstrap for frontend development.',
            'display_order' => 1,
            'status' => true,
        ]);
    }
}
