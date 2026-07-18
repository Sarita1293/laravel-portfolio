<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PersonalDetailsSeeder::class,
            SkillCategorySeeder::class,
            SkillSeeder::class,
            ProjectSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            FAQSeeder::class,
            ServiceSeeder::class,
            
        ]);
        
    }
}
