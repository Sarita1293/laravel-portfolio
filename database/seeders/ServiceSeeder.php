<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'icon' => 'bi bi-stack',
                'title' => 'Digital Solutions',
                'description' => 'I craft smart, scalable, and user-focused digital solutions that turn ideas into reality. With expertise in PHP, Laravel, MySQL, Vue.js, and jQuery, I deliver responsive websites, intuitive interfaces, and robust backend systems that help businesses grow and operate efficiently.',
                'display_order' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'bi bi-shield-check',
                'title' => 'Secure Systems',
                'description' => 'I design and develop applications with security at their core. By implementing authentication, encrypted data handling, and protection against common vulnerabilities like SQL injection, XSS, and CSRF, I ensure every project is safe, reliable, and performant.',
                'display_order' => 2,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'bi bi-graph-up',
                'title' => 'Growth Strategy',
                'description' => 'I build digital solutions that not only meet today’s needs but also scale for tomorrow’s growth. Through optimized databases, clean code, and responsive design, I help businesses increase efficiency, reach wider audiences, and enhance user engagement.',
                'display_order' => 3,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
