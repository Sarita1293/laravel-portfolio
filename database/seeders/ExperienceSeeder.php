<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([

            'company_name' => 'Servion Global Solutions Pvt Ltd.',
            'designation' => 'Senior Software Engineer',
            'project_name' => 'DFO chat application, CXONE',
            'start_date' => '2023-10-16',
            'end_date' => '2024-10-17',
            'description' => 'Digital First Omnichannel (DFO) Chat is a customer engagement solution integrated with the CXone platform. It provides live chat, file transfer, quick responses, popups, and other advanced communication features.',
            'roles_and_responsibilities' => 'Developed and enhanced quick response features for agents, integrated REST APIs using PHP Slim (Symfony Components), PHP 8, PostgreSQL, Docker, and CLI tools.',
            'currently_working' => false,
            'location' => 'Pune',
            'display_order' => 1,
            'status' => true,

        ]);
    }
}
