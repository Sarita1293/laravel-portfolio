<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PersonalDetail;

class PersonalDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PersonalDetail::create([

            
                'name' => 'Sarita Pal',
                'title' => 'Senior Software Engineer',
                'mobile' => '+91-8286027689',
                'email' => 'saritapal530@gmail.com',
                'address' => 'Kalyan-421301, Maharashtra, India',
                'years_of_experience' => '8.1',
                'profile_image' => 'profile-sarita.jpg',
                'resume_file' => 'Sarita-Pal-resume.docx',
                'linkedin_url' => 'https://www.linkedin.com/in/sarita-pal-%E3%80%9C-software-engineer-86157690/',
                'github_url' => 'https://github.com/Sarita1293/My-Portfolio',

        ]);
    }
}
