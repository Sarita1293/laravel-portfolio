<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SkillCategory;

class SkillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         SkillCategory::insert([
            [
                'name' => 'Backend',
                'display_order' => 1,
                'status' => true,
            ],
            [
                'name' => 'Frontend',
                'display_order' => 2,
                'status' => true,
            ],
            [
                'name' => 'Database',
                'display_order' => 3,
                'status' => true,
            ],
            [
                'name' => 'Cloud & DevOps',
                'display_order' => 4,
                'status' => true,
            ],
             [
                'name' => 'API',
                'display_order' => 5,
                'status' => true,
            ],
            
            [
                'name' => 'Operating Systems',
                'display_order' => 6,
                'status' => true,
            ],
            [
                'name' => 'Tools',
                'display_order' => 7,
                'status' => true,
            ],

            [
                'name' => 'Version Control',
                'display_order' => 8,
                'status' => true,
            ],
             [
                'name' => 'Project Management',
                'display_order' => 9,
                'status' => true,
            ],
             [
                'name' => 'Editor',
                'display_order' => 10,
                'status' => true,
            ],

        ]);
    }
}
