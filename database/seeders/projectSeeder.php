<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pajasa = Project::create([

                'title' => 'Pajasa Stay Solution Booking System',

                'short_description' => 'Booking management system for serviced apartments and corporate stays.',

                'description' => 'Developed booking modules, property management, REST APIs, AJAX features, authentication and reporting.',

                'project_date' => '2017-12-03',

                'role' => 'Software Developer',

                'github_url' => null,

                'live_url' => 'https://www.pajasaapartments.com/',

                'thumbnail_image' => 'room5.jpg',

                'display_order' => 1,

                'status' => true,

        ]);

        $dfo = Project::create([

                'title' => 'DFO Chat Application, CXone',

                'short_description' => 'Digital First Omnichannel Chat (DFO Chat) – CXone.',

                'description' => 'Contributed to the enhancement of an enterprise-grade chat solution integrated within the DFO platform, offering advanced features like live chat, file sharing, quick responses, and popups.Developed and integrated new quick response features for agents using API integrations.
',

                'project_date' => '2013-10-17',

                'role' => 'Senior Software Developer',

                'github_url' => null,

                'live_url' => '',

                'thumbnail_image' => 'chat1.jpg',

                'display_order' => 2,

                'status' => true,

        ]);


        $pajasa->skills()->attach([
            1,2,4,6,7,8,9,12,13,17,19,
        ]);

        $dfo->skills()->attach([
            1,3,5,6,7,8,9,10,11,12,13,15,16,17, 
        ]);

    }
}
