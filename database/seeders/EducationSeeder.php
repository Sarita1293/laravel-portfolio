<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([

            'course' => 'M.Sc.IT(Information Technology)',

            'university' => 'Mumbai University',

            'years' => '2013 - 2015',

            'description' => 'Master degree in Information Technology.Specialized in web technologies, application development, and database systems.',

            'display_order' => 1,

            'status' => true,

        ]);


        Education::create([

            'course' => 'B.Sc.IT(Information Technology)',

            'university' => 'Mumbai University',

            'years' => '2010 - 2013',

            'description' => 'Bachelor degree in Information Technology.Focused on software development, programming, and database management.',

            'display_order' => 2,

            'status' => true,

        ]);
    }
}
